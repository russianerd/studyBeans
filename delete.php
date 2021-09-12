<?php

include_once "includes/db.php";

$id = $_GET["id"];

$user = R::load('users', $id);

R::trash($user);

header('location: /');