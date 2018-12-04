<?php

include FNPATH."view_fns.php";

function action_show(){
    $dir_name = $_GET["name"];
    $data = ["title"=>"Главная",
    "dir_name" =>$dir_name
    ];
    return renderViewWithTemplate("main","default",$data);
}