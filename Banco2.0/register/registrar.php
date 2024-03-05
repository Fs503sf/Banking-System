<?php
include("E:/wamp64/www/Banco2.0/con_db.php");


if (isset($_POST['register'])) {
    $campo1 = trim($_POST['Nombre_register_usuario']);
    $campo2 = trim($_POST['Apellido_register_usuario']);
    $campo3 = trim($_POST['DNI_register_usuario']);
    $campo4 = trim($_POST['Email_register_usuario']);
    $campo5 = trim($_POST['Clave_register_usuario']);
    $campo6 = 0;

    $consulta1 = "INSERT INTO `user_table`(`DNI_user`, `Nombre`, `Apellido`, `Mail`) VALUES ('$campo3','$campo1','$campo2','$campo4')";
    $resultado1 = mysqli_query($conex, $consulta1);

    if ($resultado1) {
        $filas_afectadas = mysqli_affected_rows($conex);
       
        if ($filas_afectadas > 0) {
            $consulta2 = "INSERT INTO `account_table`(`DNI_user`, `Security_key`, `Saldo`) VALUES ('$campo3','$campo5','$campo6')";
            $resultado2 = mysqli_query($conex, $consulta2);

            if ($resultado2) {
                
                header("location: http://localhost/Banco2.0/si.php?DNI_user=$campo3");
            } else {
                echo "Error al guardar los datos en account_table: " . mysqli_error($conex);
            }
        } else {
            echo "Error al guardar los datos en user_table.";
        }
    } else {
        echo "Error en la consulta 1: " . mysqli_error($conex);
    }
}
?>

