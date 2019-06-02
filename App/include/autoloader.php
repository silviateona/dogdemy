<?php
//the path from autoloader.php (current file) to the real document root (Dogdemy)
//instead of publis, which is the server root
$include_path = realpath(dirname(__FILE__).'/../../');
set_include_path($include_path);
spl_autoload_register();