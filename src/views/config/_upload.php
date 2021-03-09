<?php


$filesCount = count($_FILES['archivo']['name']);

for($i=0;$i<$filesCount;$i++){
    if(!empty($_FILES['archivo']['name'][$i])){
        $name = $_FILES['archivo']['name'][$i];
        $newDirection = '../../assets/archives/'.$name;
        
        if(file_exists($newDirection)){
            echo 'ya existe';
            #die();
        }else{
            $temporal_name = $_FILES['archivo']['tmp_name'][$i];
            move_uploaded_file($temporal_name, $newDirection);
        }
    }else{

    }
}

?>