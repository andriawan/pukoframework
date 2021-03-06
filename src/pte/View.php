<?php

namespace pukoframework\pte;

use pukoframework\auth\Auth;
use pukoframework\peh\ThrowView;

class View extends Controller implements Auth
{
    public function __construct()
    {
        $exceptionHandler = new ThrowView();
        set_exception_handler(array($exceptionHandler, 'ExceptionHandler'));
        set_error_handler(array($exceptionHandler, 'ErrorHandler'));
    }

    public function Login($username, $password)
    {
    }

    public function Logout()
    {
    }

    public function GetLoginData($id)
    {
    }

    public function OnInitialize()
    {
    }
}