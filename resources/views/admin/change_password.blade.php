@extends('admin.admin_main')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Change Password</h4>

                            <form action="{{ route('change.password') }}" method="POST">
                                @csrf

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                                @elseif(session('error'))
                                    <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                                @endif

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" placeholder="Old Password"
                                            id="example-text-input" name="old_password">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('new_password') is-invalid @enderror"
                                            type="password" placeholder="Enter New Password" id="example-text-input"
                                            name="new_password">

                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Confirm New
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" placeholder="Confirm New Password"
                                            id="example-text-input" name="new_password_confirmation">
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Change Password">

                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
