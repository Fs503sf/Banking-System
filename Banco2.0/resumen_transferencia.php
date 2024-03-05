<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de transferencia</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .dei {
        position: absolute;
        top:10px;
        left:10px;
        max-width: 100px;
        color: black; /* Color del texto "Dei" */
        margin-left:8px;
        }

        .bank {
        color: #2980b9; /* Color del texto "Bank" */
        }

        .resumen-transferencia {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        h3 {
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        b {
            color: #007bff;
        }

        form {
            margin-top: 20px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
        }

    .alert {
      background-color: #4CAF50; 
      color: white;
    }
    </style>
</head>
<body>

<?php
include("E:/wamp64/www/Banco2.0/con_db.php");                       

$Security_key=$_GET['Security_key'];
$Id_cuenta2=$_GET['Id_cuenta2'];
$monto=$_GET['monto'];

$sql_back = $conex->query("select DNI_user from account_table where Ident_cuenta= '$Id_cuenta2'");
$row = $sql_back->fetch_assoc();
$Dni_cuenta2 = $row['DNI_user'];

$sql_back = $conex->query("select Nombre, Apellido from user_table where DNI_user = '$Dni_cuenta2'");
$row = $sql_back->fetch_assoc();
$Nombre_cuenta2 = $row['Nombre'];
$Apellido_cuenta2= $row['Apellido'];


$sql_back = $conex->query("select DNI_user, Ident_cuenta from account_table where Security_key= '$Security_key'");
$row = $sql_back->fetch_assoc();
$Dni_cuenta1 = $row['DNI_user'];
$Id_cuenta1 = $row['Ident_cuenta'];

$sql_back = $conex->query("select Nombre, Apellido from user_table where DNI_user = '$Dni_cuenta1'");
$row = $sql_back->fetch_assoc();
$Nombre_cuenta1 = $row['Nombre'];
$Apellido_cuenta1= $row['Apellido'];

?>
<body>
    <h2>
    <div class="dei">Dei<span class="bank">Bank</span></div>
    </h2>   
    <div class="resumen-transferencia">
    <h1> 
           <div class="alert">
            La transferencia ha sido realizada con exito
           </div>
        </h1>
        <h3>Datos del receptor</h3>
        <ul>
            <li>Nombre: <?php echo $Nombre_cuenta2 ?></li>
            <li>Apellido: <?php echo $Apellido_cuenta2 ?></li>
            <li>DNI: <?php echo $Dni_cuenta2 ?></li>
            <li>Identificador de cuenta: <?php echo $Id_cuenta2 ?></li>
        </ul>

        <h3>Datos de emisor:</h3>
        <ul>
            <li>Nombre: <?php echo $Nombre_cuenta1 ?></li>
            <li>Apellido: <?php echo $Apellido_cuenta1 ?></li>
            <li>DNI: <?php echo $Dni_cuenta1?></li>
            <li>Identificador de cuenta: <?php echo $Id_cuenta1 ?></li>
        </ul>

        <h3>Monto transferido: <b>$<?php echo $monto ?></b></h3>

        <form action="http://localhost/Banco2.0/inicio/inicio.php" method="get">
            <input type="hidden" name="Id_cuenta" value="<?php echo $Id_cuenta1?>">
            <input type="hidden" name="username" value="<?php echo $Nombre_cuenta1?>">
            <input type="hidden" name="usersurname" value="<?php echo $Apellido_cuenta1?>">
            <button>Entendido</button>
        </form>
    </div>
</body>
</html>