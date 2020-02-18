<?php
namespace core;

class Router{

    protected $db = [];
    public function __construct()
    {
        $arr = require "config/box.php";
        foreach($arr as $key => $value){
            $this->db[$key] = $value;
        }
    }

    public function run(){
        return $this->db['tender'];
    }
    public function db(){

    }
}