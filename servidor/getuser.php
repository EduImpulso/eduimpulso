<?php
    require_once("./Models/User.php");

    $username = "nath";
    $data = User::getUser($username);
