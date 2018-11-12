<?php /** @var \App\Data\GenreDTO[] $data */?>

<h1>Add new Book</h1>
<form method="post">
    <label>
        Book Title:
        <input type="text" name="title">
    </label><br/>
    <label>
        Book Author:
        <input type="text" name="author">
    </label><br/>
    <label>
        Description:
        <textarea name="description"></textarea>
    </label><br/>
    <label>
        Image URL:
        <input type="text" name="image">
    </label><br/>
    <label>
        Category:
        <select name="genre_id">
            <option></option>
            <?php foreach ($data as $genre):?>
            <option value="<?= $genre->getId()?>"><?= $genre->getName()?></option>
            <?php endforeach;?>
        </select>
    </label><br/>
    <input type="submit" value="Add Book" name="add">
    <a href="profile.php">Cancel</a>
</form>