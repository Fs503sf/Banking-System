<?php
include("E:/wamp64/www/Banco2.0/con_db.php");

if (!empty($_POST["siguiente"]))
{
    if(empty($_POST["Id_cuenta2"]) or empty($_POST["Dni_cuenta2"]))
    {
        echo '<br><center> <div class= "alert" style= "background-color: #FF6666; font-family: sans-serif; color: #ffff;" > POR FAVOR RELLENE TODOS LOS CAMPOS</div> </center>';
    }
    else
    {
        $Id_cuenta2=$_POST["Id_cuenta2"];
        $Dni_cuenta2=$_POST["Dni_cuenta2"];

        $sql1=$conex->query("select * from account_table where Ident_cuenta= '$Id_cuenta2' and DNI_user='$Dni_cuenta2'");

        if($datos=$sql1->fetch_object())
        {
            header("location: http://localhost/Banco2.0/transferencia/transferenciaP2.php?Dni_cuenta2=$Dni_cuenta2&Id_cuenta2=$Id_cuenta2");
        }
        else
        {
            echo '<div class="alert">El usuario ingresado no existe</div>';
        }
    }
}


?>