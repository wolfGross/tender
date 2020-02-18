<?php
namespace core;

class Router{

    protected $routes = [];
    public function __construct()
    {
        $arr = require "config/box.php";
    }

    public static function run(){
        return "router";
    }

}