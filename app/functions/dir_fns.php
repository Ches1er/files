<?php

function dirShow($path){
    return array_slice(scandir(DOCROOT.$path),2);
}

function dirNew($name,$path){
    mkdir(DOCROOT."/".$path."/".$name);
}

function dirDel($name,$path){
    rmdir(DOCROOT."/".$path."/".$name);
}

