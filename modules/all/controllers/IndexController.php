<?php
require_once 'models/AllRepository.php';
class IndexController extends Controller {
    
    public function doctorAction() {
        if(Session::get('UserID')) {
            $repository = new AllRepository();
            $data = $repository->findDoctorAll();
            $user['role'] = $repository->getUser(Session::get('UserID'));
            $this->view->generate('all', 'doctor.php', 'index.php', $data, $user);
        } else {
            header('Location: ../login');
        }
    }
    public function cardAction() {
        if(Session::get('UserID')) {
            $repository = new AllRepository();
            $data = $repository->findCardAll();
            $user['role'] = $repository->getUser(Session::get('UserID'));
            $this->view->generate('all', 'card.php', 'index.php', $data, $user);
        } else {
            header('Location: ../login');
        }
    }
    public function visitorAction() {
        if(Session::get('UserID')) {
            $repository = new AllRepository();
            $data = $repository->findVisitorAll();
            $user['role'] = $repository->getUser(Session::get('UserID'));
            $this->view->generate('all', 'visitor.php', 'index.php', $data, $user);
        } else {
            header('Location: ../login');
        }
    }
    public function recordAction() {
        if(Session::get('UserID')) {
            $repository = new AllRepository();
            $data = $repository->findRecordAll();
            $user['role'] = $repository->getUser(Session::get('UserID'));
            $this->view->generate('all', 'record.php', 'index.php', $data, $user);
        } else {
            header('Location: ../login');
        }
    }
    
    
    
    public function cardNewAction() {
        if(Session::get('UserID')) {
            $repository = new AllRepository();
            $this->view->generate('all', 'cardnew.php', 'index.php', $data);
        } else {
            header('Location: ../login');
        }
    }
    public function cardSaveAction() {
        $data['name'] = $_POST['name'];
        $repository = new AllRepository();
        $response = $repository->cardSave($data);
        header('Location: /card');
    }
    public function doctorNewAction() {
        if(Session::get('UserID')) {
            $repository = new AllRepository();
            $data['specialty'] = $repository->findSpecialty();
            $data['gender'] = $repository->findGender();
            $this->view->generate('all', 'doctornew.php', 'index.php', $data);
        } else {
            header('Location: ../login');
        }
    }
    public function doctorSaveAction() {
        $data['specialty'] = $_POST['specialty'];
        $data['gender'] = $_POST['gender'];
        $data['full_name'] = $_POST['full_name'];
        $data['worktime'] = $_POST['worktime'];
        $data['passport'] = $_POST['passport'];
        $data['address'] = $_POST['address'];
        $data['experience'] = $_POST['experience'];
        $repository = new AllRepository();
        $response = $repository->doctorSave($data);
        header('Location: /doctor');
    }
    public function doctorDeleteAction() {
        $data['id'] = $_GET['id'];
        $repository = new AllRepository();
        $response = $repository->doctorDelete($data);
        header('Location: /doctor');
    }
    public function cardDeleteAction() {
        $data['id'] = $_GET['id'];
        $repository = new AllRepository();
        $response = $repository->cardDelete($data);
        header('Location: /card');
    }
    public function visitorDeleteAction() {
        $data['id'] = $_GET['id'];
        $repository = new AllRepository();
        $response = $repository->visitorDelete($data);
        header('Location: /visitor');
    }
    public function recordDeleteAction() {
        $data['id'] = $_GET['id'];
        $repository = new AllRepository();
        $response = $repository->recordDelete($data);
        header('Location: /record');
    }
    public function visitorNewAction() {
        if(Session::get('UserID')) {
            $repository = new AllRepository();
            $data['card'] = $repository->findCardAll();
            $this->view->generate('all', 'visitornew.php', 'index.php', $data);
        } else {
            header('Location: ../login');
        }
    }
    public function visitorSaveAction() {
        $data['name'] = $_POST['name'];
        $data['card'] = $_POST['card'];
        $repository = new AllRepository();
        $response = $repository->visitorSave($data);
        header('Location: /visitor');
    }
    public function recordNewAction() {
        if(Session::get('UserID')) {
            $repository = new AllRepository();
            $data['card'] = $repository->findCardAll();
            $data['doctor'] = $repository->findDoctorsAll();
            $this->view->generate('all', 'recordnew.php', 'index.php', $data);
        } else {
            header('Location: ../login');
        }
    }
    public function recordSaveAction() {
        $data['time'] = $_POST['time'];
        $data['doctor'] = $_POST['doctor'];
        $data['card'] = $_POST['card'];
        $data['record'] = $_POST['record'];
        $repository = new AllRepository();
        $response = $repository->recordSave($data);
        header('Location: /record');
    }
    
}

