<?php

class AllRepository extends Repository {
    
    public function getUser($id) {
        $query = $this->em->query('SELECT user.role FROM `user` where user.id = '.$id.'');
        return $query->fetchAll();
    }
    public function findDoctorAll() {
        $query = $this->em->query('SELECT `doctor`.`id`, `doctor`.`full_name`, `doctor`.`address`, `doctor`.`passport`, `doctor`.`experience`, `doctor`.`worktime`, `specialty`.`name` as `specialty`, `gender`.`name` as `gender` FROM `doctor` left join `specialty` on `specialty`.`id` = `doctor`.`id_specialty` left join `gender` on `gender`.`id` = `doctor`.`id_gender`');
        return $query->fetchAll();
    }
    public function findCardAll() {
        $query = $this->em->query('SELECT * FROM  `card`');
        return $query->fetchAll();
    }
    public function findVisitorAll() {
        $query = $this->em->query('SELECT card.id, card.number, visitor.full_name  FROM  `visitor` left join card on card.id = visitor.id_card');
        return $query->fetchAll();
    }
    public function findRecordAll() {
        $query = $this->em->query('SELECT medical_record.id, medical_record.time, medical_record.record, doctor.full_name as doctor, card.number as card, visitor.full_name as visitor  FROM  `medical_record` inner join card on card.id = medical_record.id_card inner join doctor on doctor.id = medical_record.id_doctor inner join visitor on visitor.id_card = medical_record.id_card');
        return $query->fetchAll();
    }
    public function findGender() {
        $query = $this->em->query('SELECT * FROM  `gender`');
        return $query->fetchAll();
    }
    public function findSpecialty() {
        $query = $this->em->query('SELECT * FROM  `specialty`');
        return $query->fetchAll();
    }
    public function findDoctorsAll() {
        $query = $this->em->query('SELECT `doctor`.`full_name` FROM `doctor`');
        return $query->fetchAll();
    }
    
    
    public function cardSave($data) {
        $query = $this->em->prepare('INSERT INTO card (number) VALUES(:name)');
        $query->execute(array(
            ':name' => $data['name']
        ));
        return $query->fetch();
    }
    public function doctorSave($data) {
        $query = $this->em->prepare('INSERT INTO doctor (`full_name`, `id_specialty`, `id_gender`, `address`, `passport`, `experience`, `worktime`) '
                . 'VALUES(:name, :sp, :gender, :address, :pass, :exp, :wt)');
        $query->execute(array(
            ':name' => $data['full_name'],
            ':sp' => $data['specialty'],
            ':gender' => $data['gender'],
            ':address' => $data['address'],
            ':pass' => $data['passport'],
            ':exp' => $data['experience'],
            ':wt' => $data['worktime']
        ));
        return $query->fetch();
    }
    public function doctorDelete($data) {
        $query = $this->em->prepare('DELETE FROM `doctor` WHERE `id` = :id');
        $query->execute(array(
            ':id' => $data['id']
        ));
    }
    public function cardDelete($data) {
        $query = $this->em->prepare('DELETE FROM `card` WHERE `id` = :id');
        $query->execute(array(
            ':id' => $data['id']
        ));
    }
    public function visitorDelete($data) {
        $query = $this->em->prepare('DELETE FROM `visitor` WHERE `id` = :id');
        $query->execute(array(
            ':id' => $data['id']
        ));
    }
    public function recordDelete($data) {
        $query = $this->em->prepare('DELETE FROM `medical_record` WHERE `id` = :id');
        $query->execute(array(
            ':id' => $data['id']
        ));
    }
    public function visitorSave($data) {
        $query = $this->em->prepare('INSERT INTO visitor (full_name, id_card) VALUES(:name, :card)');
        $query->execute(array(
            ':name' => $data['name'],
            ':card' => $data['card']
        ));
        return $query->fetch();
    }
    public function recordSave($data) {
        $query = $this->em->prepare('INSERT INTO visitor (id_card, id_doctor, time, record) VALUES(:card, :doctor, :time, :record)');
        $query->execute(array(
            ':time' => $data['time'],
            ':doctor' => $data['doctor'],
            ':record' => $data['record'],
            ':card' => $data['card']
        ));
        return $query->fetch();
    }
    
}

