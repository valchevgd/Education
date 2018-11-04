<?php /** @var \App\Data\UserDTO $data */?>

<h2>Your profile!</h2>

<form method="post">
    <label>
        Username:
        <input type="text" name="username" value="<?= $data->getUsername();?>"/>
    </label><br/>
    <label>
        Password:
        <input type="password" name="password" />
    </label><br/>
    <label>
        First Name:
        <input type="text" name="first_name" value="<?= $data->getFirstName();?>"/>
    </label><br/>
    <label>
        Last Name:
        <input type="text" name="last_name" value="<?= $data->getLastName();?>"/>
    </label><br/>
    <label>
        Birthday:
        <input type="text" name="born_on" value="<?= $data->getBornOn();?>"/>
    </label><br/><br/>
    <input type="submit" name="edit" value="Edit Profile"/>
</form>

You can <a href="logout.php">logout</a> or you can see all <a href="index.php">users</a>.<br/>
<p style="color: red">Also you can <a href="delete.php">delete</a> your profile.</p>

