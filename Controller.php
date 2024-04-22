<?php
include("DB_Ops.php");
        function redirect_back($attrubite,$value){
            header("Location: {$_SERVER['HTTP_REFERER']}?".$attrubite."={$value}");
        }
        function validation_error(){
            $valid=upload_user_image();
            if($valid==1){redirect_back("error","wrong_format");
                return ;
            
            }
            elseif($valid== 2){ redirect_back("error","wrong_upload");
                return ;
            }
            
        $valid=insert(connectDB("localhost","root",'',"web_project"));
            
        if($valid==1){
            redirect_back("succes","successful_action");
        }
        elseif($valid==1062){
            redirect_back("error","worng_username");
        }
        else
            {
            redirect_back("error","error_in_DB");
    }
    
}
validation_error();
    