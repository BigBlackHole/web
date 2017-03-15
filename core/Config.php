<?php
class Config {
    private $configs = [];
    private static $instance;
    private function __construct() {
    }
    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function getConfig($name) {
        if (!array_key_exists($name, $this->configs)) {
            $this->loadConfig($name);
        }
        return $this->configs[$name];
    }
    private function loadConfig($name) {
        $this->configs[$name] = include_once('config/'.$name.'.php');
    }
}

