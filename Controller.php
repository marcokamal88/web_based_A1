<?php
    include("DB_Ops.php");
    include("upload.php");


    function redirect_back($attrubite,$value){
        $prev_url = $_SERVER['HTTP_REFERER'];
        $rev_without_query = explode("?", $prev_url)[0];
        header("Location: {$rev_without_query}?".$attrubite."={$value}");
    }

    function validation_error(){

        $valid=upload_user_image(); /// if success upload will hold uploaded file name
        if($valid==1){
            redirect_back("upload_error","wrong_format");
            return ;
        }
        elseif($valid== 2){ 
            redirect_back("upload_error","wrong_upload");
            return ;
        }

    
        $valid=insert($valid);
            
        if($valid==1){
            redirect_back("succes","successful_action");
            return ;
        }
        else if($valid==1062){
            redirect_back("worng_username","true");
            return ;
        }
        else{
            redirect_back("error_in_DB","true");
            return ;
        }
        
        
    }

    validation_error();
    