<?php

function upload_user_image(){
    if($_FILES['userimg']){
        $target_dir = "images/";
        $input_name = "userimg";
        $target_file = $target_dir . basename($_FILES[$input_name]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        $error = false;
        
        function redirect_back($error){
            header("Location: {$_SERVER['HTTP_REFERER']}?error={$error}");
        }
        
        // allow only images files
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            $error = true;
            redirect_back('wrong_format');
        }
        
        
        if(!$error){
            $uploaded_successfully = file_exists($target_file) ? true : move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file);
            if ($uploaded_successfully) {
                return htmlspecialchars(basename( $_FILES[$input_name]["name"]));
            } else {
                redirect_back('upload_failed');
            }
        }
    }
}






