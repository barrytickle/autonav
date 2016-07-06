<?php

$dir = getcwd().'/';
$file = scandir($dir);

$allowed_types = ['php'];
$unallowed_folders = ['includes'];



function show_folders($dir, $allowed_types, $unallowed_folders){
    $files = scandir($dir);
    for($i = 0; $i < count($files); $i++){
        $ext = explode('.', $files[$i]);
        if(in_array(end($ext), $allowed_types)){
            print($file[$i]. "<br>");
        }else{
            if(!in_array($files[$i], $unallowed_folders)){
                print('<li>'.$files[$i].'</li>');
                show_folders($dir.$files[$i], $allowed_types, $unallowed_folders);
            }
        }
    }
    
    
    
}

for($i = 0; $i < count($file); $i++){
    if (strpos($file[$i], ".") !== false) {
        $ext = explode('.', $file[$i]);
        if(in_array(end($ext), $allowed_types)){
            print($file[$i]."<br>");  
        }
    }else{
        if(!in_array($file[$i], $unallowed_folders)){
            print('<li>'.$file[$i].'</li>');
            show_folders($dir.$file[$i], $allowed_types, $unallowed_folders);
        }
    }
}