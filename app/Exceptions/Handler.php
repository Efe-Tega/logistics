<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        // $this->renderable(function (Throwable $e, $request) {
        //     if (
        //         Str::contains($e->getMessage(), 'Attempt to read property') &&
        //         Str::contains($e->getMessage(), 'on null')
        //     ) {
        //         return response()->json([
        //             'error' => 'Null object access detected. Please check your data.'
        //         ], 500);
        //     }
        // });

        $this->renderable(function (MethodNotAllowedHttpException $e, Request $request) {
            if ($request->expectsJson()) {
                return response()->json([
                    'error' => 'HTTP method not allowed for this route.'
                ], 405);
            }

            return response()->view('errors.method_not_allowed', [], 405);
        });

        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
