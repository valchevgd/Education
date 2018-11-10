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
        Category:
        <select name="cat_id">
            <option selected="selected" value="<?= $data->getCatId();?>"><?=$data->getCategoryName()?></option>
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