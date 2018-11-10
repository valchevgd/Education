<?php


namespace App\Service;


use App\Data\TaskDTO;
use App\Repository\TaskRepository;

class TaskService implements TaskServiceInterface
{
    /** @var TaskRepository */
    private $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * @param int $user_id
     * @return \Generator
     */
    public function allTasks($user_id):\Generator
    {
        return $this->taskRepository->findAll($user_id);
    }

    public function addTask(TaskDTO $task): bool
    {
        return $this->taskRepository->insert($task);
    }

    public function editTask($task, $task_id):bool
    {
        return $this->taskRepository->update($task, $task_id);
    }

    public function findOneById(int $task_id): TaskDTO
    {
        return $this->taskRepository->findOneById($task_id);
    }

    public function deleteTask(int $task_id): bool
    {
        return $this->taskRepository->dropTask($task_id);
    }

    public function deleteTaskByUser(int $user_id): bool
    {
        return $this->taskRepository->deleteTaskByUser($user_id);
    }
}