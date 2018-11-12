<?php /** @var \App\Data\BookDTO $data */ ?>

<h1>View Book</h1>

<a href="profile.php">My Profile</a>
<br/><br/>
<strong>Book Title: </strong> <?= $data->getTitle()?><br/><br/>
<strong>Book Author: </strong> <?= $data->getAuthor()?><br/><br/>
<strong>Description: </strong> <?= $data->getDescription()?><br/><br/>
<strong>Genre: </strong> <?= $data->getGenreName()?><br/><br/><br/><br/>
<img src="<?= $data->getImage()?>">