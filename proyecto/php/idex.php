<?php
    
    //Hola 
    $apellido="trejo";
    $edad=2004;
    $dinero=1000;
    $nombre="diego";
    $verdad=FALSE;
    $falso=True;

    function mostrarmisdatos($nombre,$apellido,$edad,$dinero){
        return "Mi nombre es".$nombre." Y mi apellido es".$apellido."Y mi edad es ".$edad;
    }
    $hola=  mostrarmisdatos($nombre,$apellido,$edad,$dinero);
    echo($hola);
    $miedades =30;
    if($miedades>=19){
        print("Soy mayor");
    }elseif($miedades>=25){
        print("eres muy grande");
    }
?>