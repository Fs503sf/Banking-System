
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacer transferencia</title>
    <link rel="icon" href="favicon (1).ico">

    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .dei {
        color: black; /* Color del texto "Dei" */
        margin-left:8px;
        }

        .bank {
        color: #2980b9; /* Color del texto "Bank" */
        }

        .main_title {
            text-align: center;
            margin-top: 23px;
        }

        h1 {
            font-size: 27px;
            font-weight: bold;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 400px;
            margin: 0 auto;
            margin-top: 40px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            background-color: #007bff;
            font-family: sans-serif;
            font-size: 21px;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        .datos {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
    </style>
</head>
<body>

<?php
    include ("E:/wamp64/www/banco2.0/con_db.php");

    $Dni_cuenta2 = $_GET["Dni_cuenta2"];
    $Id_cuenta2 = $_GET["Id_cuenta2"];

    $sql2 = $conex->query("select Nombre, Apellido from user_table where DNI_user='$Dni_cuenta2'");
    $userdata=$sql2->fetch_assoc();
    $Nombre_cuenta2=$userdata['Nombre'];
    $Apellido_cuenta2=$userdata['Apellido'];
    ?>
    <h2>
    <div class="dei">Dei<span class="bank">Bank</span></div>
    </h2>
    <center>
        <div class="main_title">
            <h1>Hacer transferencia</h1>
        </div>
    </center>

    
        <form action="http://localhost/Banco2.0/transferencia/procesar_transferencia.php" method="post">
            <div class="datos">
            <center>   <h3>Datos del receptor</h3> </center>
                <ul>
                    <li>Nombre: <?php echo $Nombre_cuenta2 ?></li>
                    <li>Apellido: <?php echo $Apellido_cuenta2 ?></li>
                    <li>DNI: <?php echo $Dni_cuenta2 ?></li>
                    <li>Identificador de cuenta: <?php echo $Id_cuenta2 ?></li>
                </ul>
            </div>
    <center>
            <h3>Ingrese el monto a transferir:</h3>
            <input type="hidden" name="Id_cuenta2" value="<?php echo $Id_cuenta2 ; ?>">
            <input type="number" placeholder="ARS$" name="monto" required>
            <h3>Ingrese su clave de seguridad:</h3>
            <input type="password" name="Security_key" required>
            <button type="submit" class="button">Realizar transferencia</button>
        </form>
    </center>

</body>
</html>