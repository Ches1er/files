<?php

function dirShow($path){
    $all_units = scandir(DOCROOT.$path);
    $result=[];
    foreach ($all_units as $unit){
        if ($unit==="."||$unit==="..")continue;
        else $result[]=$unit;
    }
    return $result;
}

function dirNew($name,$path){
    mkdir(DOCROOT."/".$path."/".$name);
}

function dirDel($name,$path){
    rmdir(DOCROOT."/".$path."/".$name);
}

function dirFind($name,$path){
    $result = array();
    $dirs = dirShow($path);
    foreach ($dirs as $key=>$unit) {
        if (is_dir($path."/".$unit)){
            $result[$unit] = dirFind($name,$path."/".$unit);
        }
        else if(strpos($unit,$name)!==false)
        {
            $result[]=$unit;
        }
    }
    return $result;
}

