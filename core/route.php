<?php
class route
{
    public static function getUrl()
    {
        $url = '';
        if (isset($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        }
        return $url;
    }

    public static function routeHandle($url)
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
