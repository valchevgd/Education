<?php /** @var \App\Data\UserDTO[] $data */?>

<h2>List of out users</h2>

<table border="1">
    <tr>
        <th>Username</th>
        <th>Full Name</th>
        <th>Birthday</th>
    </tr>
    <?php foreach ($data as $user):?>
    <tr>
        <td><?= $user->getUsername();?></td>
        <td><?= $user->getFirstName().' '.$user->getLastName();?></td>
        <td><?= $user->getBornOn();?></td>
    </tr>
    <?php endforeach;?>
</table>
<br/>
Edit <a href="profile.php">your profile</a>.