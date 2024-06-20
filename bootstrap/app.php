<?php

use App\Http\Middleware\user;

use App\Http\Middleware\guest;
use App\Http\Middleware\Login;
use App\Http\Middleware\only_admin;
use Illuminate\Foundation\Application;
use Illuminate\Routing\MiddlewareName;
use App\Http\Middleware\ApplyBusinessRules;
use Illuminate\Auth\Events\Login as EventsLogin;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'login' => \App\Http\Middleware\CheckLogin::class,
            'admin' => \App\Http\Middleware\only_admin::class,
            'user' => \App\Http\Middleware\user::class,
            'quest' =>  \App\Http\Middleware\guest::class,
           

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();