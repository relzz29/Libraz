<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->validateCsrfTokens(except: [
            'api/*',
        ]);

        $middleware->alias([
            'verified' => \App\Http\Middleware\EnsureEmailIsVerified::class,
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
            'role' => \App\Http\Middleware\RoleMiddleware::class,
        ]);

        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (\Symfony\Component\HttpKernel\Exception\HttpException $e, \Illuminate\Http\Request $request) {
            if ($e->getStatusCode() === 419) {
                if ($request->expectsJson() || $request->isXmlHttpRequest()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Sesi kedaluwarsa atau token tidak valid. Silakan coba kembali.',
                        'csrf_token' => csrf_token(),
                        'csrf_expired' => true,
                    ], 419);
                }

                // Regenerate token so the redirected form receives a fresh valid token
                $request->session()->regenerateToken();

                $targetUrl = $request->header('Referer') ?: route('admin.login');
                return redirect()->to($targetUrl)
                    ->withInput($request->except('password', '_token'))
                    ->with('error', 'Sesi Anda sempat kedaluwarsa. Token keamanan telah diperbarui otomatis, silakan coba Masuk kembali.');
            }
        });
    })->create();
