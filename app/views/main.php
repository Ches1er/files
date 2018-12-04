<?php
include FNPATH."dir_fns.php";
include FNPATH."files_fns.php";
$dirs = dirShow("/users_files");
if ($dir_name)$files_arr = filesShow("/users_files/".$dir_name);


foreach ($dirs as $dir):?>
<div><?=$dir?></div>
<a href="<?="/del/?name=".$dir?>">X</a>
<a href="<?="/showfiles/?name=".$dir?>">Show</a>
<? endforeach;?>
<form action="/newdir" method="post">
    <input type="text" name="dir_name">
    <input type="submit" value="make dir">
</form>

<?
if (is_array($files_arr)):
foreach ($files_arr as $file):?>
    <div><?=$file?></div>
<? endforeach;
endif;
?>
