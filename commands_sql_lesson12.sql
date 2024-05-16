CREATE TABLE IF NOT EXISTS `users`
(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` CHAR(100) NOT NULL,
    `email` CHAR(255) UNIQUE NOT NULL,
    `age` TINYINT UNSIGNED DEFAULT NULL,
    `gender` ENUM('male', 'female'),
    `password` CHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `deleted_at` TIMESTAMP DEFAULT NULL
    ) ENGINE = InnoDB CHARACTER SET utf8

    INSERT INTO `users`(`name`, `email`, `age`, `gender`, `password`)
    VALUES('Lily', 'lily@gmail.com', 29, 'female', 'pass'),
('Anna', 'anna@gmail.com', 10, 'female', 'pass')

SELECT `name`, `email`, `age` FROM `users`
SELECT `name`, `email`, `age` FROM `users` WHERE `gender` = 'female' OR `age` < 35
SELECT `name`, `email`, `age` FROM `users` WHERE  `id` > 2 AND (`gender` = 'female' OR `age` < 30)
SELECT * FROM `users` WHERE `password` LIKE '%rd'
SELECT `name`, `email` FROM `users` WHERE `gender` = 'male' ORDER BY `created_at` DESC

DELETE FROM `users` WHERE `id` = 7

UPDATE `users` SET `deleted_at` = CURRENT_TIMESTAMP WHERE `id` = 1