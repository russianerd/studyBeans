<?php

include_once "includes/db.php";

//$id = $_GET["id"];

$login = $_GET["login"];

//$user = R::load('users',$id);

$user = R::findOne('users','login = ? AND email = ?',[$login, "ivan@localhost"]);

if($user["name"] === NULL){

    echo '<h1>404 пользователь не найден</h1>';
    die();

}

?>

<h1>Привет, <?= $user["name"] ?></h1>
<h3>Логин: <?= $user["login"] ?></h3>
<h4>Email: <?= $user["email"] ?></h4>
