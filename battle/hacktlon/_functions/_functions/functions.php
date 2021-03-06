<?php

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function debug($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function importImg($path, $img){
    $image = checkInput($img['name']);
    $imageExtension = pathinfo($path.$image,PATHINFO_EXTENSION);
    if(strtolower($imageExtension) == "jpg" || $imageExtension == "png" || $imageExtension == "jpeg" || $imageExtension == "gif" )
    {
        $tmp_name = $img['tmp_name'];
        move_uploaded_file($tmp_name, $path.$image);
    }
    return $path.$image;
}

function importVid($path, $img){
    $image = checkInput($img['name']);
    $imageExtension     = pathinfo($path.$image,PATHINFO_EXTENSION);
    if(strtolower($imageExtension) == "mp4" || $imageExtension == "mkv" )
    {
        $tmp_name = $img['tmp_name'];
        move_uploaded_file($tmp_name, $path.$image) ;
    }
}
function checkForm($tab)
{
    $array = [];
    for($i=0; $i<count($tab); $i++)
    {
       $array[$i] = checkInput($tab[$i]);
    }
    return $array; 
}
function validFrom($tab){

    $var = 0;
    $var1 = 0;
    foreach ($tab as $i){
        $var1 ++;
        if(!empty($i)){
            $var ++;
        }else{
            $var --;
        }
    }
    if($var == $var1){
        return true;
    }else{
        return false;
    }
}
