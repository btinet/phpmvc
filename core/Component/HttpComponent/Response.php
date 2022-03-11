<?php
/*
 * Copyright (c) 2022. Benjamin Wagner
 */

namespace Core\Component\HttpComponent;

class Response
{

    public function redirect($status, $url = null) {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        header('Location: ' .$protocol.$_SERVER['HTTP_HOST'].'/'.$url, true, $status);
        exit;
    }

    public function generateRoute(string $route, array $mandatory = null,$anchor = null): string
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        if ($mandatory) {
            foreach ($mandatory as $name => $value) {
                $route .= "/$value";
            }
        }
        if($anchor){
            $route .= "#$anchor";
        }
        return $protocol.$_SERVER['HTTP_HOST'].'/'.$route;
    }

}