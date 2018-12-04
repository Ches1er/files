<?php

function filesShow($path){
    return array_slice(scandir(DOCROOT.$path),2);
}