<?php declare(strict_types=1);

use Lordsaudkaric\Purephp\Bootstrap\App;

class Application
{
    private function __construct()
    {
    }

    /**
     * Run the application
     * @return void
     */
    public static function run(): void
    {
        /** Define project root path */
        define('ROOT', realpath(__DIR__ . '/../'));

        /** Define directory separator */
        define('DS', DIRECTORY_SEPARATOR);

        $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/../');
        $dotenv->load();

        /** Run Framework App */
        App::run();
    }
}