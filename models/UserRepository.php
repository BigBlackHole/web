<?php

class UserRepository extends Repository {

    public function findAll() {
        $query = $this->em->query('SELECT * FROM user');
        return $query->fetchAll();
    }
    public function findByOne($email) {
        $query = $this->em->prepare('SELECT * FROM  user WHERE  email = :email');
        $query->execute(array(
            ':email' => $email
        ));
        return $query->fetch();
    }
    public function save($data) {
        $query = $this->em->prepare('INSERT INTO user (email,password) VALUES(:email,:password)');
        $query->execute(array(
            ':email' => $data['email'],
            ':password' => md5($data['password'])
        ));
        return $query->fetch();
    }
}

