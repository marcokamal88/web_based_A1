<?php

function upload_user_image(){
    if($_FILES['userimg']){
        $target_dir = "images/";
        $input_name = "userimg";
        $target_file = $target_dir . basename($_FILES[$input_name]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        $error = false;
        

        
        // allow only images files
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            $error = true;
            return 1;
        }
        
        
        if(!$error){
            $uploaded_successfully = file_exists($target_file) ? true : move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file);
            if ($uploaded_successfully) {
                return htmlspecialchars(basename( $_FILES[$input_name]["name"]));
            } else {
                return 2;
            }
        }
    }
}