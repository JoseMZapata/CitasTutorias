<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="login_alum";
    $cone= new mysqli($servidor,$usuario,$password,$base);

    if($cone->connect_error){
        die("ConexionExitosa".$cone->connect_error);
    }
    $username=$_POST['Usuario'];
    $contra= $_POST['contrasena'];
    $codigo= $_POST['codigo'];
    $sql="SELECT nombre,contrasenia,codigo FROM alumnos 
    WHERE nombre= '$username' AND contrasenia='$contra'
    AND codigo=$codigo";
    $result=$cone->query($sql);

    if($result->num_rows>0){
        $_SESSION['Usuario']=$username;
        header("Location:../vistaalumno.html");
    }else{
        header("Location: ../login_alum.html");
    
    }
    $cone->close();

?>