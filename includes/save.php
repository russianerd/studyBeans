<?php

include_once "db.php";

$id = $_POST["id"];
$name = $_POST["name"];
$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];

$user = R::findAll('users', 'login = ?', [$login]);

$user["name"] = $name;
$user["login"] = $login;
$user["email"] = $email;
$user["password"] = $password;

R::store($user);

header('location: /edit.php?id=' . $id);

