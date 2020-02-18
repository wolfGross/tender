<?php
use core\Router;
require "lib/loader.php";
$content = new Router();
echo $content->run();