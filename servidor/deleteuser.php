<?php
    require_once("./Models/User.php");

    $username = $_POST['username'];
    $data = User::getUser($username);
    $data = User::deleteUser($username);
