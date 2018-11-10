<?php

namespace App\Repository;


use App\Data\TaskDTO;
use Database\PDODatabase;

class TaskRepository implements TaskRepositoryInterface
{
    /** @var PDODatabase */
    private $db;

    public function __construct(PDODatabase $pdo)
    {
        $this->db = $pdo;
    }

    /**
     * @param int $user_id
     * @return \Generator|TaskDTO
     */
    public function findAll($user_id):\Generator
    {
        return $this->db->query(
            'SELECT t.TASK_ID as id, t.TITLE as title, t.DESCRIPTION as description, t.LOCATION as location, t.STARTED_ON as startedOn, t.DUE_DATE as dueDate, u.USERNAME as username, c.CAT_NAME as category_name
                                        FROM tasks as t
                                        INNER JOIN users as u USING (USER_ID)
                                        INNER JOIN categories as c USING (CAT_ID) 
                                        WHERE user_id = ?')
        ->execute([$user_id])
        ->fetch(TaskDTO::class);
    }

    public function insert(TaskDTO $task): bool
    {
        $this->db->query("INSERT INTO tasks (title, description, location, user_id, cat_id, started_on, due_date)
                                  VALUES (?, ?, ?, ?, ?, ?, ?)
                                  ")->execute([
                                      $task->getTitle(),
            $task->getDescription(),
            $task->getLocation(),
            $task->getAuthorId(),
            $task->getCatId(),
            $task->getStartedOn(),
            $task->getDueDate()
        ]);

        return true;
    }

    public function findOneById(int $task_id): TaskDTO
    {
        return $this->db->query("SELECT t.TASK_ID as id, t.TITLE as title, t.DESCRIPTION as description, t.LOCATION as location, t.CAT_ID as catId, t.STARTED_ON as startedOn, t.DUE_DATE as dueDate, u.USERNAME as username, c.CAT_NAME as category_name
                                        FROM tasks as t
                                        INNER JOIN users as u USING (USER_ID)
                                        INNER JOIN categories as c USING (CAT_ID) 
                                        WHERE task_id = ?
                                        ")->execute([$task_id])
                                        ->fetch(TaskDTO::class)
                                        ->current();
    }

    public function update(TaskDTO $task, int $task_id): bool
    {
        $this->db->query("UPDATE tasks
                                SET TITLE = ?,
                                DESCRIPTION = ?,
                                LOCATION = ?,
                                CAT_ID = ?,
                                STARTED_ON = ?,
                                DUE_DATE = ?
                                WHERE TASK_ID = ?")->execute([
            $task->getTitle(),
            $task->getDescription(),
            $task->getLocation(),
            $task->getCatId(),
            $task->getStartedOn(),
            $task->getDueDate(),
            $task_id
        ]);

        return true;
    }

    public function dropTask(int $task_id): bool
    {
        $this->db->query("DELETE FROM tasks
                                WHERE TASK_ID = ?
                                ")->execute([$task_id]);

        return true;
    }

    public function deleteTaskByUser(int $user_id): bool
    {
        $this->db->query("DELETE FROM tasks
                                WHERE USER_ID = ?
                                ")->execute([$user_id]);

        return true;
    }
}