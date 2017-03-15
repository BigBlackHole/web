<?php
class Router {
    static function getRoute() {
        return parse_url($_SERVER['REQUEST_URI'])['path'];
    }
    function ErrorPage404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
    public function addRoute($mca) {
        $controller_name = ucfirst($mca['controller']).'Controller';
        $controller_file = $controller_name.'.php';
        $action = ucfirst($mca['action']).'Action';
        $controller_path = 'modules/'.$mca['module'].'/controllers/'.$controller_file;
        if(file_exists($controller_path)) {
            include 'modules/'.$mca['module'].'/controllers/'.$controller_file;
        } else {
            Router::ErrorPage404();
        }
        $controller = new $controller_name;
        if(method_exists($controller, $action)) {
            $controller->$action();
        } else {
            Router::ErrorPage404();
        }
    }
}

