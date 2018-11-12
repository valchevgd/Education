<?php /** @var \App\Data\BookDTO $data */?>

<h1 style="color: red"> Are you sure you want to delete this book ?</h1>

<table border="1">
    <tr>
        <th>Title</th>
        <td><?= $data->getTitle()?></td>
    </tr>
    <tr>
        <th>Genre</th>
        <td><?= $data->getGenreName()?></td>
    </tr>
    <tr>
        <th>Author</th>
        <td><?= $data->getAuthor()?></td>
    </tr>
</table>
<br/>
If 'yes', please enter your password to confirm deleting process:<br/>

<form method="post">
    <input type="password" name="password"><br/>
<input type="submit" value="Delete Task" name="delete">
</form>
Or <a href="profile.php">cancel</a> deleting.