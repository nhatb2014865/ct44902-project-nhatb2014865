<?php
class route
{
    function __construct()
    {
        global $__config;

        $folder_root = _dir_root . '/controllers/' . $__config['controller']['path'];
        $__controller = $__config['controller']['name'];
        $__action = $__config['controller']['action'];
        $__param = [];

        self::handleUrl($folder_root, $__controller, $__action, $__param);
    }

    protected static function handleUrl($folder_root, $__controller, $__action, $__param)
    {
        $url = self::getUrl();

        $url = self::routeHandle($url);

        if (!empty($url)) {
            $folder_root = _dir_root . '/controllers';
            $arrUrl = array_filter(explode('/', $url));
            foreach ($arrUrl as $key => $value) {
                unset($arrUrl[$key]);
                if (is_dir($folder_root . '/' . $value) && !empty($arrUrl[$key + 1])) {
                    $folder_root .= '/' . $value;
                } else if (is_file($folder_root . '/' . $value . '.php')) {
                    $__controller = $value;
                    if (!empty($arrUrl[$key + 1]) && method_exists($__controller, $arrUrl[$key + 1])) {
                        $__action = $arrUrl[$key];
                        unset($arrUrl[$key + 1]);
                    }
                    break;
                } else {
                    require _dir_root . '/views/errors/404Error.php';
                    die();
                }
            }
            $__param = array_values($arrUrl);
        }

        if (file_exists($folder_root . '/' . $__controller . '.php')) {
            require $folder_root . '/' . $__controller . '.php';
            $__controller = new $__controller();
            if (method_exists($__controller, $__action)) {
                call_user_func_array([$__controller, $__action], $__param);
            } else {
                require _dir_root . '/views/errors/404Error.php';
                die();
            }
        } else {
            require _dir_root . '/views/errors/404Error.php';
            die();
        }
    }

    protected static function getUrl()
    {
        $url = '';
        if (isset($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        }
        return $url;
    }

    protected static function routeHandle($url)
    {
        global $__config;
        $routeUrl = trim($url, '/');

        if (!empty($__config['route'])) {

            foreach ($__config['route'] as $key => $value) {
                if (preg_match('~' . $key . '~is', $url)) {
                    $routeUrl = preg_replace('~' . $key . '~is', $value, $url);
                }
            }
        }
        return $routeUrl;
    }
}
