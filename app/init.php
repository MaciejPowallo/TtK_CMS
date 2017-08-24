<?php

define("SITE_PATH", "http://cms.loc/");
define("APP_PATH", str_replace("\\", "/", dirname(__FILE__)) . "/");
define("APP_RES", "http://cms.loc/app/res/");

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'neobud';

require_once(APP_PATH."core/core.php");
$CMS = new CMS_Core($server, $user, $pass, $db);