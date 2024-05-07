<?php
declare(strict_types=1);

require_once __DIR__ . '/TaskStatus.php';
require_once __DIR__ . '/TaskTracker.php';
require_once __DIR__ . '/ResultsPrinter.php';

try {
    $tasks = new TaskTracker('tasks.txt');
    $printer = new ResultsPrinter();

//    $addTask = $tasks->addTask("Task name", "1-Low");
//    $printer->addTaskResult($addTask);

//    $deleteTask = $tasks->deleteTask("7");
//    $printer->deleteTaskResult($deleteTask, "7");

//    $allTasks = $tasks->getTasks();
//    $printer->getTasksResult($allTasks);

//    $completeTask = $tasks->completeTask("0");
//    $printer->completeTaskResult($completeTask);

} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
} finally {
//    echo 'Finally!' . PHP_EOL;
}

