<?php
//load config files
require_once _dir_root . '/configs/database.php';
require_once _dir_root . '/configs/controller.php';
require_once _dir_root . '/configs/route.php';

//load core files
require_once _dir_root . '/core/controller.php';
require_once _dir_root . '/core/database.php';
require_once _dir_root . '/core/model.php';
require_once _dir_root . '/core/session.php';
require_once _dir_root . '/core/response.php';
require_once _dir_root . '/core/request.php';
require_once _dir_root . '/core/route.php';

session::init();

$database = new database();
$route = new route();
