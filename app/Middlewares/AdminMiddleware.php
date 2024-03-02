<?php declare(strict_types=1);

namespace App\Middlewares;

class AdminMiddleware
{
    public function __construct()
    {
    }

    public static function handle()
    {
        if (1 !== 1)
            die('Error in the middleware!');
    }
}