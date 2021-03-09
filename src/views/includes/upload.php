<?php
    if($_FILES){

        $uploadDirectory = '../../assets/archives/';
        $uploadFileCopy = $uploadDirectory . basename($_FILES['file']['name']);

        echo $_FILES['file']['name'];
        
            if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFileCopy)){
                echo 'Archivo subido!';
            }else{
                echo 'no se subio';
            }
        
        
    }
    
?>