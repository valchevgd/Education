<?php /** @var \App\Data\BookDTO[] $data */?>


<h1>My Books</h1>
<a href="add_book.php">Add new book</a> |  <a href="profile.php">My profile</a> | <a href="logout.php">logout</a><br/><br/>
<table border="1">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th colspan="2">Options</th>
    </tr>
    <?php foreach ($data as $book):?>
        <tr>
            <td><?= $book->getTitle()?></td>
            <td><?= $book->getAuthor()?></td>
            <td><?= $book->getGenreName()?></td>
            <td><a href="edit_book.php?book_id=<?= $book->getId()?>">Edit</a></td>
            <td><a href="delete_book.php?book_id=<?= $book->getId()?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>

