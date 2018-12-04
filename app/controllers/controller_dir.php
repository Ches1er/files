<?php

include FNPATH."dir_fns.php";

function action_new(){
    $name = $_POST["dir_name"];
    $path = "users_files";
    dirNew($name,$path);
    header("Location:/");
    return "";
}

function action_del(){
    $name = $_GET["name"];
    $path = "users_files";
    dirDel($name,$path);
    header("Location:/");
    return "";
}