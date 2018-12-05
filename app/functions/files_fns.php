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

function filesCopy($name,$old_dir,$new_dir){
    $filepath = getUsersDirPath("users_files").$old_dir."/".$name;
    $new_dir_path = getUsersDirPath("users_files").$new_dir;
    if (file_exists($filepath) && is_dir($new_dir_path)){
        $fsrc = fopen($filepath,"r");
        $fdist = fopen($new_dir_path."/".$name,"w");
        while(!feof($fsrc)){
            $data=fread($fsrc,4096);
            fwrite($fdist,$data);
        }
        fclose($fsrc);
        fclose($fdist);
    }
    else return "";
}

function filesRemove($name,$old_dir,$new_dir){
    $filepath = getUsersDirPath("users_files").$old_dir."/".$name;
    $new_dir_path = getUsersDirPath("users_files").$new_dir;
    if (file_exists($filepath) && is_dir($new_dir_path)){
        $fsrc = fopen($filepath,"r");
        $fdist = fopen($new_dir_path."/".$name,"w");
        while(!feof($fsrc)){
            $data=fread($fsrc,4096);
            fwrite($fdist,$data);
        }
        fclose($fsrc);
        fclose($fdist);
        unlink($filepath);
    }
    else return "";
}