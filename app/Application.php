<?php

namespace App;

class Application
{
    private static $instance;

    public static $ROOT_DIR;

    public Request $request;
    public Router $router;

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public static function getInstance($rootPath): Application
    {
        if (self::$instance == null) {
            self::$instance = new Application($rootPath);
        }

        return self::$instance;
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}