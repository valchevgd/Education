<?php /** @var \App\Data\TaskDTO $data */ ?>

<h1>Edit task "<?= $data->getTitle()?>"</h1>

<form method="post">
    <label>
        Title:
        <input type="text" name="title" value="<?=$data->getTitle();?>">
    </label><br/>
    <label>
        Title:
        <input type="text" name="location" value="<?=$data->getLocation();?>">
    </label><br/>
    <label>
        <select name="cat_id">
            <option value="1" <?php if ($data->getCatId() === 1) echo 'selected'?>>Anniversary</option>
            <option value="2" <?php if ($data->getCatId() === 2) echo 'selected'?>>Birthday</option>
            <option value="3" <?php if ($data->getCatId() === 3) echo 'selected'?>>Business</option>
        </select>
    </label><br/>
    <label>
        Description:
        <textarea name="description"><?=$data->getDescription();?></textarea>
    </label><br/>
    <label>
        Start on:
        <input type="text" name="start_on" value="<?=$data->getStartedOn();?>">
    </label><br/>
    <label>
        Due Date:
        <input type="text" name="due_date" value="<?=$data->getDueDate();?>">
    </label><br/><br/>
    <input type="submit" name="edit" value="Edit Task">
    <a href="index.php">Cancel</a>
</form>