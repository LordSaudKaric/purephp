<?php declare(strict_types=1);

namespace App\Middlewares;

class UsersMiddleware
{
    public function __construct()
    {
    }

    public function handle()
    {
        if (1 !== 1)
            die('Error in the middleware!');
    }
}