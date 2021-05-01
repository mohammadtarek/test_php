<?php
class str
{
    public static $x = 3;

    public static function uppercasefirst($str)
    {
        return ucfirst($str) . "<br>";
    }
    public static function filter($str)
    {
        return htmlspecialchars(trim($str)) . "<br>";
    }
}

$name ="mohammad tarek";
$msg ="<h> hello world h1 </h> <script>alter('haha');</script>";
echo str::uppercasefirst($name);
echo str::filter($msg);
echo str::$x;
echo $msg;