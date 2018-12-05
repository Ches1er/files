<?php

include FNPATH."view_fns.php";

function action_show(){
    $dir_name = $_GET["name"];
    $find_file = $_GET["file_name"];
    $data = ["title"=>"Главная",
    "find_file"=>$find_file,
    "dir_name" =>$dir_name
    ];
    return renderViewWithTemplate("main","default",$data);
}