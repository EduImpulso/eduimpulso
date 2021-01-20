<?php
    require_once("./Models/Courses.php");

    $data = Courses::getAll();
    return $data;
    