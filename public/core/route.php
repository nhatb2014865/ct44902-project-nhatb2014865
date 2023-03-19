<?php
class route
{

    public function __construct()
    {
        self::handlUrl();
    }

    public static function handlUrl()
    {
        global $config;

        $__controller = $config['controller'];
        $__action = $config['action'];
        $__param = [];

        $url = self::getUrl();

        $arrUrl = array_filter(explode('/', $url));

        if (!empty($arrUrl)) {
            $folder_root = _dir_root . '/controllers';
            foreach ($arrUrl as $key => $value) {
                if (is_dir($folder_root . '/' . $value)) {
                    unset($arrUrl[$key]);
                    $folder_root = $folder_root . '/' . $value;
                } else if (is_file($folder_root . '/' . $value . '.php')) {

                    if (!empty($arrUrl[$key + 1])) {
                        $__action = $arrUrl[$key + 1];
                        unset($arrUrl[$key + 1]);
                    }

                    unset($arrUrl[$key]);
                    $arrUrl = array_values($arrUrl);
                    $__controller = $value;
                    break;
                }
            }
        }
        
        require $folder_root . '/' . $__controller . '.php';
        $__controller = new $__controller();

        $__params = array_values($arrUrl);

        if (method_exists($__controller, $__action)) {
            call_user_func_array([$__controller, $__action], $__params);
        } else
            require _dir_root . '/errors/404Error.php';
    }


    public static function getUrl()
    {
        $url = '';
        if (isset($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        }
        return $url;
    }

    public static function handlRoute($url)
    {
        global $config;
        extract($config);
        //route;
        return $url;
    }
}
