<?php declare(strict_types=1);

// Pure PHP framework //

// Require autoload file for generating classes
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap the application
require __DIR__ . '/../bootstrap/app.php';

Application::run();