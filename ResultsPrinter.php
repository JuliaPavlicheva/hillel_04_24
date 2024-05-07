<?php
declare(strict_types=1);

class ResultsPrinter
{
    public function addTaskResult(int|false $result): void
    {
        if ($result === false) {
            echo "Failed to add task!\n";
        }
        echo "Task added successfully!\n";
    }

    public function deleteTaskResult(int $result, string $task_id): void
    {
        echo "Task #$task_id was deleted successfully!\n";
    }

    public function getTasksResult(array $result): void
    {
        if(count($result) !== 0) {
            print_r($result);
        }

        echo "No tasks found!\n";
    }

    public function completeTaskResult(int $result): void
    {
        echo "Task status updated successfully!\n";
    }
}