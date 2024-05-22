<?php

try {
    $dsn = 'mysql:host=mysql;port=3306;dbname=hillel';
    $database = new PDO($dsn, 'root', 'password');

//  INSERT
    $insertSql = "INSERT INTO `users`(`name`, `email`, `age`, `gender`, `password`) VALUES 
        ('Helen', 'Helen@gmail.com', 19, 'female', 'passHelen'),
        ('Max', 'Max@dot.com', 60, 'male', 'passMax')";
//    $stmt = $database->prepare($insertSql);

//    SELECT ALL
    $selectSql = "SELECT `name`, `email`, `age` FROM `users`";
//    $stmt = $database->prepare($selectSql);

//    SELECT AGE
    $selectAge = "SELECT `name`, `email`, `age` FROM `users` WHERE `age` < 20";
//    $stmt = $database->prepare($selectConditionAge);

//    SELECT EMAIL - GMAIL, GENDER - MALE
    $selectMaleGmail = "SELECT `name`, `email`, `age`, `gender` FROM `users` WHERE `gender` = 'male'
AND `email` LIKE '%gmail.com'";
//    $stmt = $database->prepare($selectMaleGmail);

//    SELECT FEMALE CREATED_AT DESC
    $selectFemaleDesc = "SELECT `name`, `gender` FROM `users` WHERE `gender` = 'female' ORDER BY `created_at` DESC";
//    $stmt = $database->prepare($selectFemaleDesc);

//    DELETE
    $deleteSql = "DELETE FROM `users` WHERE `email` = 'testdd@gmail'";
//    $stmt = $database->prepare($deleteSql);

//    UPDATE
    $updateSql = "UPDATE `users` SET `deleted_at` = CURRENT_TIMESTAMP WHERE `id` = 36";
//    $stmt = $database->prepare($updateSql);

    $stmt->execute();
    $result = $stmt->fetchAll();
    echo "<pre>";
    print_r($result);
    echo "<pre>";
} catch (PDOException $exception) {
    echo $exception->getMessage();
}