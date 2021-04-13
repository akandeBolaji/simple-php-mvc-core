<?php

namespace akandebolaji\phpmvc\exception;


use akandebolaji\phpmvc\Application;

class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}