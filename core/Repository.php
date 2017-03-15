<?php

class Repository {
    protected $em;

    public function __construct() {
        $this->em = new Database();
        $this->em->exec('SET NAMES utf8');
    }
    public function __destruct() {
        $this->em = null;
    }
}

