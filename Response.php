<?php

namespace akandebolaji\phpmvc;

class Response
{
    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

    public function json($data, $code)
    {
        header('Content-Type: application/json');
        http_response_code($code);
        return json_encode($data);
    }
}
