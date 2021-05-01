<?php

class session_start
{
    public function __construct()
    {
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    }
    public function get(string $key)
    {
        return $_SESSION[$key];
    }
    public function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public function has(string $key)
    {
        return isset($_SESSION[$key]);
    }
    public function remove($key)
    {
        unset($_SESSION[$key]);
    }
    public function destroy($key)
    {
        $_SESSION = [];
        session_destroy();
    }
}