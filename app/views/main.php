<?php
include FNPATH."dir_fns.php";
include FNPATH."files_fns.php";
$dirs = dirShow("/users_files");
if ($dir_name)$files_arr = filesShow($dir_name); //$dir_name get through controller_main.php
?>

<div class="dirs">
    <h4>F</h4>
    <div class="info">
<? foreach ($dirs as $dir):?>
<div class="unit">
    <div><?=$dir?></div>
    <a href="<?="/showfiles/?name=".$dir?>">I</a>
    <a href="<?="/deldir/?name=".$dir?>">X</a>
</div>
<? endforeach;?>
    </div>
<form action="/newdir" method="post">
    <label for="dir_name">Имя папки:</label>
    <input type="text" name="dir_name">
    <input type="submit" value="Сделать папку">
</form>
</div>


<? if (is_array($files_arr)):?>

<div class="dirs">
    <h4>J</h4>
    <div class="info">

<?foreach ($files_arr as $file):?>
    <div class="unit files">
    <div><?=$file?></div>
    <a href="<?="/delfile/?dir=".$dir_name."&name=".$file?>">X</a>
    </div>
<? endforeach;?>
    </div>
<form action="/addfile" method="post" enctype="multipart/form-data">
    <input type="hidden" name="dir_name" value="<?=$dir_name?>">
    <input type="file" name="file">
    <input type="submit">
</form>
<?endif;?>
</div>

