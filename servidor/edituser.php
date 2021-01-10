<?php
    require_once("./Models/User.php");

    $id = 48;
    $name = "Nathally Souza";
    $username = "nath";
    $scholling = "Superior";
    $gender = "Mulher trans";
    $email = "nath@edu.com";
    $password = "123456";
    $data = User::editUser($id, $name, $username, $scholling, $gender, $email, $password);
