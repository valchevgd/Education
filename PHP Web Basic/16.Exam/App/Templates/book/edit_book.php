<?php /** @var \App\Data\BookDTO $data */
/**  @var \App\Data\GenreDTO[] $genres*/?>

<h1>Add new Book</h1>
<form method="post">
    <label>
        Book Title:
        <input type="text" name="title" value="<?= $data->getTitle()?>">
    </label><br/>
    <label>
        Book Author:
        <input type="text" name="author" value="<?= $data->getAuthor()?>">
    </label><br/>
    <label>
        Description:
        <textarea name="description"><?= $data->getDescription()?>"</textarea>
    </label><br/>
    <label>
        Image URL:
        <input type="text" name="image" value="<?= $data->getImage()?>">
    </label><br/>
    <label>
        Category:
        <select name="genre_id">
            <?php $i=1;
            foreach ($genres as $genre):?>
                <option value="<?= $genre->getId()?>" <?php if($data->getGenreId() === $i)echo 'selected';?>><?= $genre->getName()?></option>
            <?php
            $i++;
            endforeach;?>
        </select>
    </label><br/><br/>
    <img src="<?= $data->getImage()?>">
    <br/>
    <input type="submit" value="Edit" name="edit">
    <a href="profile.php">Cancel</a>
</form>