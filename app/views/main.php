<?php
include FNPATH."dir_fns.php";
include FNPATH."files_fns.php";
$dirs = dirShow(USERSDIR);
if ($dir_name)$files_arr = filesShow($dir_name); //$dir_name get through controller_main.php
if ($find_file)$findfiles_arr = dirFind($find_file,USERSDIR);
print_r($findfiles_arr);
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
<form action="/newdir" method="post" >
    <p>Создание папки:</p>
    <label for="dir_name">Имя папки:</label>
    <input type="text" name="dir_name">
    <input type="submit" value="Создать папку">
</form>

<form action="/findfile" method="get" >
    <p>Поиск файла:</p>
    <label for="file_name">Имя файла:</label>
    <input type="text" name="file_name">
    <input type="submit" value="Поиск">
</form>

    <? if (is_array($findfiles_arr)):?>
    <h4>Find</h4>
    <div class="info">
        <?foreach ($findfiles_arr as $file):?>
            <div class="unit files">
                <div><?=$file?></div>
            </div>
        <? endforeach;?>
    </div>
    <?endif;?>
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
    <p>Загрузка файла</p>
    <input type="hidden" name="dir_name" value="<?=$dir_name?>">
    <input type="file" name="file">
    <input type="submit">
</form>

<form action="/copyfile" method="post">
<p>Копирование файла</p>
    <input type="hidden" name="olddir_name" value="<?=$dir_name?>">
    <input type="text" name="file_name" value="Имя файла">
    <input type="text" name="newdir_name" value="Имя папки">
    <input type="submit" value="Копировать">
</form>

<form action="/removefile" method="post">
   <p>Перемещение файла</p>
   <input type="hidden" name="olddir_name" value="<?=$dir_name?>">
   <input type="text" name="file_name" value="Имя файла">
   <input type="text" name="newdir_name" value="Имя папки">
   <input type="submit" value="Переместить">
</form>
<?endif;?>
</div>

