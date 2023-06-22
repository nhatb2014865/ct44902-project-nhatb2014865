<?php
define('_dir_root', str_replace('\\', '/', dirname(__DIR__)));

$folder = explode('/', _dir_root);
$folder = $folder[array_key_last($folder)];

if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    define('_web_root', 'https://' . $_SERVER['HTTP_HOST']);
} else {
    define('_web_root', 'http://' . $_SERVER['HTTP_HOST']);
}

require_once _dir_root . '/bootstrap.php';
