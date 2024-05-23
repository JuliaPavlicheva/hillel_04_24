<?php

try {
    $dsn = 'mysql:host=mysql;port=3306;dbname=hillel';
    $database = new PDO($dsn, 'root', 'password');

//  INSERT
    $result = $database->exec("INSERT INTO `users`(`name`, `email`, `age`, `gender`, `password`) VALUES 
        ('Helen', 'Helen@gmail.com', 19, 'female', 'passHelen'),
        ('Max', 'Max@dot.com', 60, 'male', 'passMax')");

//    SELECT ALL
    $stmt = $database->query("SELECT `name`, `email`, `age` FROM `users`");

//    SELECT AGE
    $stmt = $database->query("SELECT `name`, `email`, `age` FROM `users` WHERE `age` < 20");

//    SELECT EMAIL - GMAIL, GENDER - MALE
    $stmt = $database->query("SELECT `name`, `email`, `age`, `gender` FROM `users` WHERE `gender` = 'male'
AND `email` LIKE '%gmail.com'");

//    SELECT FEMALE CREATED_AT DESC
    $stmt = $database->query("SELECT `name`, `gender` FROM `users` WHERE `gender` = 'female' 
                                     ORDER BY `created_at` DESC");

//    DELETE
    $stmt = $database->exec("DELETE FROM `users` WHERE `email` = 'testdd@gmail'");

//    UPDATE
    $stmt = $database->exec("UPDATE `users` SET `deleted_at` = CURRENT_TIMESTAMP WHERE `id` = 36");

//    $result = $stmt->fetchAll();
    echo "<pre>";
    print_r($result);
    echo "<pre>";
} catch (PDOException $exception) {
    echo $exception->getMessage();
}