<?php
class app
{
    private $folder_root;
    private $__controller;
    private $__action;
    private $__param;

    public static $app;

    function __construct()
    {
        self::$app = $this;

        global $__config;

        $this->folder_root = _dir_root . '/app/controllers/' . $__config['controller']['path'];
        $this->__controller = $__config['controller']['name'];
        $this->__action = $__config['controller']['action'];
        $this->__param = [];

        $this->handleUrl();
    }

    protected function handleUrl()
    {
        $url = route::getUrl();

        $url = route::routeHandle($url);

        if (!empty($url)) {
            $this->folder_root = _dir_root . '/app/controllers';
            $arrUrl = array_filter(explode('/', $url));
            foreach ($arrUrl as $key => $value) {
                unset($arrUrl[$key]);
                if (is_dir($this->folder_root . '/' . $value) && !empty($arrUrl[$key + 1])) {
                    $this->folder_root .= '/' . $value;
                } else if (is_file($this->folder_root . '/' . $value . '.php')) {
                    $this->__controller = $value;

                    if (!empty($arrUrl[$key + 1])) {
                        $this->__action = $arrUrl[$key + 1];
                        unset($arrUrl[$key + 1]);
                    }
                    break;
                } else {
                    require _dir_root . '/app/views/errors/404Error.php';
                    die();
                }
            }
            $this->__param = array_values($arrUrl);
        }

        if (file_exists($this->folder_root . '/' . $this->__controller . '.php')) {
            require $this->folder_root . '/' . $this->__controller . '.php';
            $this->__controller = new $this->__controller();
            if (method_exists($this->__controller, $this->__action)) {
                call_user_func_array([$this->__controller, $this->__action], $this->__param);
            } else {
                require _dir_root . '/app/views/errors/404Error.php';
                die();
            }
        } else {
            require _dir_root . '/app/views/errors/404Error.php';
            die();
        }
    }

    public function getCurrentController(){
        return $this->__controller;
    }
}
