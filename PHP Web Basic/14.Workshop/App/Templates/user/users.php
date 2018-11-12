<?php /** @var \App\Data\UserDTO[] $data*/?>

<h1>All Users</h1>

<table border="1">
    <tr>
        <th>Username</th>
        <th>Full Name</th>
        <th>Birthday</th>
    </tr>
    <?php foreach ($data as $user) :?>
    <tr>
        <td><?= $user->getUsername()?></td>
        <td><?= $user->getFirstName()." ".$user->getLastName()?></td>
        <td><?= $user->getBornOn()?></td>
    </tr>
    <?php endforeach;?>
</table>

Go back to your <a href="profile.php">profile</a>.