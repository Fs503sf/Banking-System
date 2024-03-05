<?php
include("E:/wamp64/www/Banco2.0/con_db.php");

if (!empty($_POST["login"]))
{
    if(empty($_POST["Nombre_usuario"]) or empty($_POST["Apellido_usuario"]) or empty($_POST["DNI_usuario"]) or empty($_POST["Clave_bancaria"]) or empty($_POST["Id_cuenta"]))
    {
        echo '<div class= "alert"> POR FAVOR RELLENE TODOS LOS CAMPOS</div>';
    }
    else
    {
        $username=$_POST["Nombre_usuario"];
        $usersurname=$_POST["Apellido_usuario"];
        $userDNI=$_POST["DNI_usuario"];
        $userClave_bancaria=$_POST["Clave_bancaria"];
        $userId_cuenta=$_POST["Id_cuenta"];
        $sql1=$conex->query(" select * from account_table where Ident_cuenta='$userId_cuenta' and Security_key= '$userClave_bancaria' and DNI_user='$userDNI'");
        if($datos=$sql1->fetch_object())
        {
            $sql2=$conex->query(" select * from user_table where DNI_user='$userDNI' and Nombre= '$username' and Apellido= '$usersurname'");
            if($datos=$sql2->fetch_object())
            {
                global $userId_cuenta;
                header("location: http://localhost/Banco2.0/inicio/inicio.php?username=$username&usersurname=$usersurname&Id_cuenta=$userId_cuenta");
            }
            else
            {
                echo '<div class= "alert"> ACCESO DENEGADO</div>';
            }
        }
        else
        {
            echo '<div class= "alert"> ACCESO DENEGADO</div>';
        }
    }
}
?>