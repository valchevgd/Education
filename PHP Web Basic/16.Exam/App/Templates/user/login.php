<?php /** @var string $data */?>

<h1>Login</h1>

<?php echo '<p style="color: green">'.$data.'<p/>'?>
<form method="post">
    <label>
        Username:
        <input type="text" name="username">
    </label><br/>
    <label>
        Password:
        <input type="password" name="password">
    </label><br/>
    <input type="submit" name="login" value="Login!">
    <form/>