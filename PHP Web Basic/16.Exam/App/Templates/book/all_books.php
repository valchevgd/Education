<?php /** @var \App\Data\BookDTO[] $data */?>


<h1>My Books</h1>
<a href="add_book.php">Add new book</a> |  <a href="profile.php">My profile</a> | <a href="logout.php">logout</a><br/><br/>
<table border="1">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Added by user</th>
        <th>Details</th>
    </tr>
    <?php foreach ($data as $book):?>
        <tr>
            <td><?= $book->getTitle()?></td>
            <td><?= $book->getAuthor()?></td>
            <td><?= $book->getGenreName()?></td>
            <td><?= $book->getUsername()?></td>
            <td><a href="view_book.php?book_id=<?= $book->getId()?>">Details</a></td>

        </tr>
    <?php endforeach; ?>
</table>


