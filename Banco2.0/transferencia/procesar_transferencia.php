<?php
include("E:/wamp64/www/Banco2.0/con_db.php");

$Security_key = $_POST ['Security_key'];
$Id_cuenta2 = $_POST ['Id_cuenta2'];
$monto = $_POST['monto'];


$sql_saldo =$conex->query("select Saldo from account_table where Security_key= '$Security_key'");

    $row = $sql_saldo->fetch_assoc();
    $saldo_cuenta_origen = $row['Saldo'];

    
    if ($saldo_cuenta_origen >= $monto) 
    {

        $sql_saldo2 =$conex->query("select Saldo from account_table where Ident_cuenta='$Id_cuenta2'");
        $row2 = $sql_saldo2->fetch_assoc();
        $saldo_destino = $row2['Saldo'];
        
        $nuevo_saldo_origen = $saldo_cuenta_origen - $monto;
        $nuevo_saldo_destino = $saldo_destino + $monto;

        
        $sql_actualizar_origen =$conex->query("update account_table
        set Saldo = $nuevo_saldo_origen
        where Security_key = '$Security_key';");
        $sql_actualizar_destino =$conex->query( "update account_table
        set Saldo = $nuevo_saldo_destino
        where Ident_cuenta = '$Id_cuenta2';");

   
       header("location: http://localhost/Banco2.0/resumen_transferencia.php?Security_key=$Security_key&Id_cuenta2=$Id_cuenta2&monto=$monto");
       
    }
    else 
    {
        echo "Saldo insuficiente en la cuenta de origen";
    }


?>


