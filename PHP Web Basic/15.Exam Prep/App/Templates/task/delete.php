<?php /** @var \App\Data\TaskDTO $data */?>

<h1 style="color: red"> Are you sure you want to delete this task ?</h1>

<table border="1">
    <tr>
        <th>Title</th>
        <td><?= $data->getTitle()?></td>
    </tr>
    <tr>
        <th>Category</th>
        <td><?= $data->getCategoryName()?></td>
    </tr>
    <tr>
        <th>Location</th>
        <td><?= $data->getLocation()?></td>
    </tr>
    <tr>
        <th>Start on</th>
        <td><?= $data->getStartedOn()?></td>
    </tr>
    <tr>
        <th>Due Date</th>
        <td><?= $data->getDueDate()?></td>
    </tr>
</table>
<br/>
If 'yes', please enter your password to confirm deleting process:<br/>

<form method="post">
    <input type="password" name="password"><br/>
<input type="submit" value="Delete Task" name="delete">
</form>
Or <a href="index.php">cancel</a> deleting.