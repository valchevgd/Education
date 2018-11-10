<?php /** @var \App\Data\UserDTO $data */?>

<h2 style="color: red">Are you sure you want to delete your profile?</h2>

<form method="post">
    Enter your password to confirm deleting process:
    <input type="password" name="password"/><br/><br/>
    <input type="submit" name="yes" value="Yes"/>
    <input type="submit" name="no" value="No"/><br/>

</form>

<table border="1">
    <tr>
        <th>Username</th>
        <th>Full Name</th>
    </tr>

    <tr>
        <td><?= $data->getUsername();?></td>
        <td><?= $data->getFirstName().' '.$data->getLastName();?></td>
    </tr>
</table>
<br/>