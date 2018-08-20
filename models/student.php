<?php

class Student {
    
    public static function getStudentList() {
        // Соединение с БД
        $db = Db::getConnection();
        // Запрос к БД
        $result = $db->query('SELECT * FROM student ORDER BY surname;');
        // Получение и возврат результатов
        $i = 0;
        $studentList = array();
        while ($student = $result->fetch()) {
            $studentList[$i]['id'] = $student['id'];
            $studentList[$i]['surname'] = $student['surname'];
            $studentList[$i]['name'] = $student['name'];
            $studentList[$i]['patronymic'] = $student['patronymic'];
            $studentList[$i]['birthday'] = $student['birthday'];
            $i++;
        }
        return $studentList;
    }
    
    public static function addStudent($surname, $name, $patronymic, $birthday)
    {
        // Connect DB
        $db = Db::getConnection();
        // Query to DB
        $sql = 'INSERT INTO student (surname, name, patronymic, birthday) '
                . 'VALUES (:surname, :name, :patronymic, :birthday)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':surname', $surname, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':patronymic', $patronymic, PDO::PARAM_STR);
        $result->bindParam(':birthday', $birthday, PDO::PARAM_STR);
        return $result->execute();
    }
    
    public static function editStudent($id, $surname, $name, $patronymic, $birthday)
    {
        // Connect DB
        $db = Db::getConnection();
        // Query to DB
        $sql = "UPDATE student 
            SET surname = :surname, name = :name, patronymic = :patronymic, birthday = :birthday 
            WHERE id = :id";
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':surname', $surname, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':patronymic', $patronymic, PDO::PARAM_STR);
        $result->bindParam(':birthday', $birthday, PDO::PARAM_STR);
        return $result->execute();
    }
    
    public static function getInfoStudent($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT * FROM student WHERE id = :id';
        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        // Выполнение коменды
        $result->execute();
        // Получение и возврат результатов
        return $result->fetch();
    }
    
    
    public static function deleteStudent($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'DELETE FROM student WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    
    
}