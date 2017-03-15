<?php

class User {

    /** 
     * Id
     */
    protected $id;
    
    /**
     * Email address 
     */
    protected $email = NULL;
    /** 
     * Password hash
     */
    protected $password;
    protected $sessionPassword;
    protected $role;
    public function __construct() {
        $this->role = 1;
    }
    /**
     * Get id
     */
    public function getId() {
        return $this->id;
    }
    /**
     * Set id
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    /**
     * Set email
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    /**
     * Get email
     */
    public function getEmail() {
        return $this->email;
    }
    /**
     * Set password
     */
    public function setPassword($password) {
        if (null == $password) {
            $this->password = null;
        } else {
            $this->password = $password;
        }
        return $this;
    }
    /**
     * Get password
     */
    public function getPassword() {
        return $this->password;
    }
    public function getRole() {
        return $this->role;
    }
    /**
     * Set session password
     */
    public function setSessionPassword($sessionPassword) {
        if (null == $sessionPassword) {
            $this->sessionPassword = null;
        } else {
            $this->sessionPassword  = md5($sessionPassword);
        }
        return $this;
    }
    
    /**
     * Converts user to array
     */
    public function toArray() {
        return [
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
            'role' => $this->getRole()
        ];
    }
    public function isValid() {
        if($this->password === $this->sessionPassword) {
            return true;
        }
        return false;
    }
    
}

