<?php

function dirOpen($path){
    if (is_dir($path))opendir($path);
    else return "";
}

function dirClose($path){
    if (is_dir($path))closedir($path);
    else return "";
}

function dirShow($path){
    return array_slice(scandir(DOCROOT.$path),2);
}

function dirNew($name,$path){
    mkdir(DOCROOT."/".$path."/".$name);
}

function dirDel($name,$path){
    rmdir(DOCROOT."/".$path."/".$name);
}

