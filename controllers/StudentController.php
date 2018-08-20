<?php

class studentController {
    
    public function actionAdd() {
              
        $surname = '';
        $name = '';
        $patronymic = '';
        $birthday = '';
        
        if (isset($_POST['submit'])) {
            $surname = (string) $_POST['surname'];
            $name = (string) $_POST['name'];
            $patronymic = (string) $_POST['patronymic'];
            $birthday = (string) $_POST['birthday'];
            
            $result = Student::addStudent($surname, $name, $patronymic, $birthday);
            header ('Location: /');
        }
        
        require_once (ROOT . '/views/add.php');
        return true; 
        
    }
    
    public function actionEdit() {
               
    if (isset($_GET['id'])){
                
        $id = (int) $_GET['id'];
        $student = Student::getInfoStudent($id);
        
        if (isset($_POST['submit'])) {
            $surname = (string) $_POST['surname'];
            $name = (string) $_POST['name'];
            $patronymic = (string) $_POST['patronymic'];
            $birthday = (string) $_POST['birthday'];
            
            $result = Student::editStudent($id, $surname, $name, $patronymic, $birthday);
            header ('Location: /');
        }
        
        require_once (ROOT . '/views/edit.php');
        return true; 
        
    }
    }
    
    public function actionIndex() {
        
        if (isset($_POST['delete'])) {            
            Student::deleteStudent($_POST['id']);
        }
        
        function calculate_age($birthday) {
            $birthday_timestamp = strtotime($birthday);
            $age = date('Y') - date('Y', $birthday_timestamp);
            if (date('md', $birthday_timestamp) > date('md')) {
              $age--;
            }
            return $age;
        }
        
        $result = Student::getStudentList();
        
        require_once (ROOT . '/views/index.php');
        return true; 
        
    }
    
    
}
