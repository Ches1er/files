<?php

include FNPATH."view_fns.php";

function action_show(){
    $data = ["title"=>"Главная",
    "find_file"=>@$_GET["file_name"],
    "dir_name" =>@$_GET["name"]
    ];
    return renderViewWithTemplate("main","default",$data);
}