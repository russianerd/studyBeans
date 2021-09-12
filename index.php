<?php
//Основной файл
    include_once "includes/db.php";

    $users = R::findAll('users');

?>

<form action="includes/add.php" method="post">
    <p>Name</p>
    <input type="text" name="name">
    <p>Login</p>
    <input type="text" name="login">
    <p>Email</p>
    <input type="text" name="email"
    <p>Password</p>
    <input type="password" name="password">
    <br>
    <br>
    <button type="submit">add user</button>
</form>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>login</th>
        <th>email</th>
    </tr>
    <?php

    foreach($users as $user ){
       ?>
        <tr>
            <td><?=$user["id"]?></td>
            <td><?=$user["name"]?></td>
            <td><?=$user["login"]?></td>
            <td><?=$user["email"]?></td>
            <td><a href="user.php?login=<?= $user["login"]?>">Открыть</a></td>
            <td><a href="edit.php?id=<?= $user["id"]?>">Изменить</a></td>
            <td><a href="delete.php?id=<?= $user["id"]?>">Удалить</a></td>
        </tr>
    <?php
    }

    ?>

</table>


<style>
    td,th{
        padding: 20px;
    }
    th{
        background: #737373;
        color: #000;
    }
    td{
        background: #e3e3e3;
    }
</style>