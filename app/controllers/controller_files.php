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

function action_copy(){
    $name = $_POST["file_name"];
    $old_dir = $_POST["olddir_name"];
    $new_dir = $_POST["newdir_name"];
    filesCopy($name,$old_dir,$new_dir);
    header("Location:/");
    return "";
}

function action_remove(){
    $name = $_POST["file_name"];
    $old_dir = $_POST["olddir_name"];
    $new_dir = $_POST["newdir_name"];
    filesRemove($name,$old_dir,$new_dir);
    header("Location:/");
    return "";
}