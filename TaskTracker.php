<?php
declare(strict_types=1);

class TaskTracker
{
    private string $file;

    private array $tasks = [];

    /**
     * @throws Exception
     */
    public function __construct(string $file)
    {
        if (!file_exists($file)) {
            throw new Exception("Invalid file path!");
        }
        $this->file = $file;
        $this->getAllTasks();
    }

    public function getAllTasks(): void
    {
        $result = [];
        $tasks = file($this->file);
        foreach ($tasks as $task) {
            $task_item = explode('|', trim($task));
            $result[] = [
                'ID' => $task_item[0],
                'Name' => $task_item[1],
                'Priority' => $task_item[2],
                'Status' => $task_item[3],
            ];
        }

        $this->tasks = $result;
    }

    public function updateFile(array $updated_content): int|false
    {
        return file_put_contents($this->file, implode("\n", $updated_content));
    }

    public function addTask(string $task_name,
                             string $priority,
                             TaskStatus $task_status = TaskStatus::INCOMPLETE
    ): int|false
    {
        $task = uniqid() . '|' . $task_name . '|' . $priority . '|' . $task_status->value . "\n";
        return file_put_contents($this->file, $task, FILE_APPEND);
    }

    /**
     * @throws Exception
     */
    public function searchId(string $task_id): bool
    {
        if (in_array($task_id, array_column($this->tasks, 'ID'), true)) {
            return true;
        }

        throw new Exception("Invalid task ID!");
    }

    /**
     * @throws Exception
     */
    public function deleteTask(string $task_id): int|false
    {
        $this->searchId($task_id);

        $updated_tasks = [];
        foreach ($this->tasks as $task) {
            if ($task["ID"] !== $task_id) {
                $updated_tasks[] = implode('|', $task);
            }
        }

        return($this->updateFile($updated_tasks));
    }

    public function getTasks(TaskStatus $task_status = TaskStatus::INCOMPLETE): array
    {
        $incompleteTasks = [];
        $completedTasks = [];
        foreach ($this->tasks as $task) {
            if ($task['Status'] === $task_status->value) {
                $incompleteTasks[] = $task;
            } else {
                $completedTasks[] = $task;
            }
        }

        usort($incompleteTasks, fn($a, $b) => strcmp($b['Priority'], $a['Priority']));
        return array_merge($incompleteTasks, $completedTasks);
    }

    /**
     * @throws Exception
     */
    public function completeTask(string $task_id, TaskStatus $task_status = TaskStatus::COMPLETED): int|false
    {
        $this->searchId($task_id);
        $updated_tasks = [];
        foreach ($this->tasks as $task) {
            if ($task["ID"] === $task_id) {
                if($task["Status"] === $task_status->value) {
                    throw new Exception("The task is already completed!");
                }
                $task["Status"] = $task_status->value;
            }

            $updated_tasks[] = implode('|', $task);
        }

        return($this->updateFile($updated_tasks));
    }
}