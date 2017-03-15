<?php
class Database extends PDO {
    public function __construct() {
        $config = Config::getInstance()->getConfig('config');
        parent::__construct('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'].'', $config['db']['user'], $config['db']['password']);
    }
}