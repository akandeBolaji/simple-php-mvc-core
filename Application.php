<?php

namespace akandebolaji\phpmvc;

/**
 * Class Application
 *
 * @author  Bolaji Akande <akandebolajidanielofficial@gmail.com>
 * @package app
 */
class Application
{

    public static Application $app;
    public static string $ROOT_DIR;
    public string $layout = 'main';
    public Router $router;
    public Request $request;
    public Response $response;

    public function __construct($rootDir, $config)
    {
        self::$ROOT_DIR = $rootDir;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response)
    }
}