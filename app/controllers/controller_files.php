<?php

include FNPATH."files_fns.php";

function action_add(){
    $file = $_FILES;
    $dir = $_POST["dir_name"];
    filesAdd($dir,$file);
    header("Location:/");
    return "";
}

function action_del(){
    $name = $_GET["name"];
    $path = $_GET["dir"];
    filesDel($name,$path);
    header("Location:/");
    return "";
}