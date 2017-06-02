<?php
define('ROOT',dirname(__FILE__));
define('APPLICATION',realpath(dirname(__FILE__) . '/application'));
define('LIBRARY',realpath(dirname(__FILE__) . '/library'));
define('CONFIG',realpath(dirname(__FILE__) . '/configs'));
require_once (APPLICATION . '/bootstrap.php');
$bootstrap = new Bootstrap();
$bootstrap->run();
