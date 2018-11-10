<?php /** @var \App\Data\TaskDTO[] $data */?>


<h1>My Tasks</h1>

<table border="1">
    <tr>
        <th>Title</th>
        <th>Category</th>
        <th>Start On</th>
        <th colspan="2">Options</th>
    </tr>
    <?php foreach ($data as $task):?>
    <tr>
        <td><?= $task->getTitle()?></td>
        <td><?= $task->getCategoryName()?></td>
        <td><?= $task->getStartedOn()?></td>
        <td><a href="edit_task.php?task_id=<?= $task->getId()?>">Edit</a></td>
        <td><a href="delete_task.php?task_id=<?= $task->getId()?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="add_task.php">Add new task</a> | <a href="logout.php">logout</a> | <a href="delete_account.php">Delete your account</a>
