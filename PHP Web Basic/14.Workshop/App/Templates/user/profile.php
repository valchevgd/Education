<?php /** @var \App\Data\UserDTO $data */?>

<h1>Your profile!</h1>

<form method="POST">
    <label>
        Username:
        <input type="text" value="<?= $data->getUsername();?>" name="username" />
    </label> <br/>
    <label>
        Password:
        <input type="password" name="password"/>
    </label><br/>
    <label>
        First Name:
        <input type="text" value="<?= $data->getFirstName();?>" name="first_name"/>
    </label><br/>
    <label>
        Last Name:
        <input type="text" value="<?= $data->getLastName();?>" name="last_name"/>
    </label><br/>
    <label>
        Birthday:
        <input type="text" value="<?= $data->getBornOn();?>" name="born_on"/>
    </label><br/>
    <label>
        <input type="submit" value="Edit Profile" name="edit">
    </label>
</form>

You can <a href="logout.php">logout</a> or see <a href="users.php">all users</a>.<br/>
If you want you can <a href="delete.php">delete</a> your profile.