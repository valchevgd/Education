<?php /** @var \App\Data\UserDTO $data */?>

<h1>Hello, <?= $data->getFullName()?></h1>

<a href="add_book.php">Add new book</a>|<a href="logout.php">Logout</a>|<a href="delete_account.php">Delete your account</a>
<br/><br/>
<a href="my_books.php">My Books</a><br/>
<a href="all_books.php">All Books</a>
