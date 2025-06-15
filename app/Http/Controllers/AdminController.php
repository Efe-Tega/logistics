<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // public function AdminLogin()
    // {
    //     return view('admin.admin_main');
    // }

    public function ProfilePage()
    {
        $id = Auth::user()->id;
        $profileId = User::findOrFail($id);
        return view('admin.edit_profile', compact('profileId'));
    }

    public function UpdateProfile(Request $request)
    {
        $profileId = Auth::user()->id;
        $profileData = User::findOrFail($profileId);

        $profileData->name = $request->name;
        $profileData->email = $request->email;
        $profileData->address = $request->address;
        $profileData->phone = $request->phone;
        $profileData->web_email = $request->web_email;
        $profileData->web_name = $request->web_name;
        $profileData->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function PasswordPage()
    {
        return view('admin.change_password');
    }

    public function ChangePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        if (!Hash::check($request->old_password, Auth::user()->password)) {

            return back()->with('error', 'Old Password is Incorrect!');
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('status', 'Password Changed Successfully');
    }

    public function Destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successful',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }
}
