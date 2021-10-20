<?php
    function esOpcionMenuActiva($option){

        if (strpos($_SERVER["REQUEST_URI"],'/'.$option)==0) {
            return false ;
        } else {
            return true;
        }
    
    }

    function  existeOpcionMenuActivaEnArray($options){

       foreach ($options as $option){

       if ( esOpcionMenuActiva($option)) {
        return true;
       }  else{
        return  false;
       }  

       }

    }

    function sanitizeInput(string $data):string {

$data = trim($data);

$data = stripslashes($data);

$data = htmlspecialchars($data);
return $data;

    }