<?php
/**
 * Created by PhpStorm.
 * User: valchevgd
 * Date: 11/9/2018
 * Time: 11:01 AM
 */

namespace App\Repository;


use App\Data\TaskDTO;

interface TaskRepositoryInterface
{
    /**
     * @param int $user_id
     * @return \Generator|TaskDTO
     */
    public function findAll(int $user_id):\Generator;

    public function insert(TaskDTO $task):bool;

    public function findOneById(int $task_id):TaskDTO;

    public function update(TaskDTO $task,int $task_id):bool;

    public function dropTask(int $task_id):bool;

    public function deleteTaskByUser(int $user_id):bool;
}