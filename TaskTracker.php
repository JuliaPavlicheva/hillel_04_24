<?php
declare(strict_types=1);

class TaskTracker
{
    private string $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    /**
     * @throws Exception
     */
    public function validationPath(string $file): void
    {
        if (!file_exists($file)) {
            throw new Exception("Invalid file path!");
        }
    }

    /**
     * @throws Exception
     */
    public function getAllTasks(): array
    {
        $this->validationPath($this->file);
        $result = [];

        if (filesize($this->file) === 0) {
            return $result;
        }

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

        return $result;
    }

    /**
     * @throws Exception
     */
    public function addTask(string $task_name,
                             string $priority,
                             int $id = 0,
                             TaskStatus $task_status = TaskStatus::INCOMPLETE
    ): int|false
    {
        $tasks = $this->getAllTasks();
        if(count($tasks) !== 0) {
            $id = end($tasks)["ID"];
        }

        $task = ++$id . '|' . $task_name . '|' . $priority . '|' . $task_status->value . "\n";
        return file_put_contents($this->file, $task, FILE_APPEND);
    }

    /**
     * @throws Exception
     */
    public function searchId(array $tasks, string $task_id): bool
    {
        if (in_array($task_id, array_column($tasks, 'ID'), true)) {
            return true;
        }

        throw new Exception("Invalid task ID!");
    }

    /**
     * @throws Exception
     */
    public function deleteTask(string $task_id): int|false
    {
        $tasks = $this->getAllTasks();
        $this->searchId($this->getAllTasks(), $task_id);

        $updated_tasks = [];
        foreach ($tasks as $task) {
            if ($task["ID"] !== $task_id) {
                $updated_tasks[] = implode('|', $task);
            }
        }

        return file_put_contents($this->file, implode("\n", $updated_tasks));
    }

    /**
     * @throws Exception
     */
    public function getTasks(TaskStatus $task_status = TaskStatus::INCOMPLETE): array
    {
        $to_sort = $this->getAllTasks();

        $incompleteTasks = [];
        $completedTasks = [];
        foreach ($to_sort as $task) {
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
        $tasks = $this->getAllTasks();
        $this->searchId($this->getAllTasks(), $task_id);

        $updated_tasks = [];
        foreach ($tasks as $task) {
            if ($task["ID"] === $task_id) {
                if($task["Status"] === $task_status->value) {
                    throw new Exception("The task is already completed!");
                }
                $task["Status"] = $task_status->value;
            }

            $updated_tasks[] = implode('|', $task);
        }

        return file_put_contents($this->file, implode("\n", $updated_tasks));
    }
}