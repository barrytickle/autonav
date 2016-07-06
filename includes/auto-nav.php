<?php

$dir = getcwd().'/';
$file = scandir($dir);

$allowed_types = ['php'];
$unallowed_folders = ['includes'];



function show_folders($dir, $file){
    
}

for($i = 0; $i < count($file); $i++){
    if (strpos($file[$i], ".") !== false) {
        $ext = explode('.', $file[$i]);
        if(in_array(end($ext), $allowed_types)){
            print($file[$i]."<br>");  
        }
    }else{
        if(!in_array($file[$i], $unallowed_folders)){
            
        }
    }
}