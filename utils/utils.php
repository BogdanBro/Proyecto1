<?php
    function esOpcionMenuActiva($option){

        (strpos($_SERVER["REQUEST_URI"],'/'.$option)===0) ?  true : false;
    
    }

    function  existeOpcionMenuActivaEnArray($options){

       foreach ($options as $option){

        esOpcionMenuActiva($option) ? true : false ;

       }

    }