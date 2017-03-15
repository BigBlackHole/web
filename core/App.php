<?php
class App {
    static function run() {
        Session::init();
        $router = Router::getRoute();
        $_routes = Config::getInstance()->getConfig('routes');
        if(array_key_exists($router, $_routes)) {
            Router::addRoute(['module' => $_routes[$router][0], 'controller' => $_routes[$router][1], 'action' => $_routes[$router][2]]);
        } else {
            Router::ErrorPage404();
        }
    }
}

