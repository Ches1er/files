<?php
define("DOCROOT",$_SERVER["DOCUMENT_ROOT"]);
define("ROOTPATH",DOCROOT."/app/root/");
define("CONTROLLERPATH",DOCROOT."/app/controllers/");
define("VIEWPATH",DOCROOT."/app/views/");
define("TEMPLATESPATH",DOCROOT."/app/templates/");
define("FNPATH",DOCROOT."/app/functions/");
define("USERSDIR","/users_files");

include ROOTPATH."routing.php";
echo navigate();


/*function dirShow($path){
    $all_units = scandir($path);
    $result=[];
    foreach ($all_units as $unit){
        if ($unit==="."||$unit==="..")continue;
        else $result[]=$unit;
    }
    return $result;
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

print_r (dirFind("11","users_files"));*/

