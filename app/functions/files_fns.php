<?php

function getUsersDirPath($dir){
    return DOCROOT."/".$dir."/";
}

function filesShow($path){
    return array_slice(scandir(getUsersDirPath("users_files").$path),2);
}


function filesAdd($dir,$file){
    if (!empty($file["file"]) && $file["file"]["size"] > 0) {
        $path_part = explode(".", $file["file"]["name"]);
        $ext = end($path_part);
        $name = time() . "." . $ext;
        move_uploaded_file($file["file"]["tmp_name"], getUsersDirPath("users_files").$dir."/".$name);
    }
    else {
        echo "error";
    }
}

function filesDel($name,$dir){
    $complete_path = getUsersDirPath("users_files").$dir."/".$name;
    unlink($complete_path);
    return "";
}