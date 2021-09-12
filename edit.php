<?php

include_once "includes/db.php";

    $id = $_GET["id"];

    $user = R::load('users', $id);

?>


<form action="includes/save.php" method="post">
    <input type="hidden" name="id" value="<?= $user["id"] ?>">
    <p>name</p>
    <input type="text" name="name" value="<?= $user["name"] ?>">
    <p>login</p>
    <input type="text" name="login" value="<?= $user["login"] ?>">
    <p>email</p>
    <input type="text" name="email" value="<?= $user["email"] ?>">
    <p>password</p>
    <input type="password" name="password" value="<?= $user["password"] ?>">
    <br>
    <br>
    <button type="submit">save user</button>
</form>