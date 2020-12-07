<?php

declare(strict_types=1);

use Phalcon\Mvc\Application;

try {

    /**
     * Read the configuration
     */
    $config = include __DIR__ . "/../app/config/config.php";

    /**
     * Read auto-loader
     */
    include __DIR__ . "/../app/config/loader.php";

    /**
     * Read services
     */
    include __DIR__ . "/../app/config/services.php";

    /**
     * Handle the request
     */
    $application = new Application($di);

    echo $application->handle($_SERVER['REQUEST_URI'])->getContent();
    
} catch (\Exception $e) {
    echo $e->getMessage();
}
