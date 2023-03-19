<?php
define('_dir_root', __DIR__);

$folder = explode('\\', _dir_root);
$folder = $folder[array_key_last($folder)];

if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    define('_web_root', 'https://' . $_SERVER['HTTP_HOST'] . '/' . $folder . '');
} else {
    define('_web_root', 'http://' . $_SERVER['HTTP_HOST'] . '/' . $folder . '');
}

require_once _dir_root . '/bootstrap.php';
