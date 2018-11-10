<?php

namespace App\Service;


use App\Data\TaskDTO;

interface TaskServiceInterface
{
    /**
     * @param int $user_id
     * @return \Generator|TaskDTO
     */
    public function allTasks(int $user_id):\Generator;

    public function addTask(TaskDTO $task):bool;

    public function editTask(TaskDTO $task, int $task_id):bool;

    public function findOneById(int $task_id):TaskDTO;

    public function deleteTask(int $task_id):bool;

    public function deleteTaskByUser(int $user_id):bool;

}