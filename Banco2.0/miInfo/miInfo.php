<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Informacion</title>

    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .informacion-cuenta {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px; /* Aumento de tamaño */
            border-radius: 8px;
            text-align: center;
            width: 300px; /* Aumento de tamaño */
        }

        h1 {
            color: #333;
            margin-bottom: 50px; /* Aumento de tamaño */
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 40px; /* Aumento de tamaño */
        }

        form {
            margin-top: 50px; /* Aumento de tamaño */
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 15px 30px; /* Aumento de tamaño */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
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
    </style>
</head>
<body>
    <?php
        include("E:/wamp64/www/Banco2.0/con_db.php");

        $Ident_cuenta= $_GET['Ident_cuenta'];

        $sql_info= $conex->query("select DNI_user from account_table where Ident_cuenta='$Ident_cuenta'");
        $row = $sql_info->fetch_assoc();
        $Dni_user = $row['DNI_user'];


        $sql_info = $conex->query(" select Nombre, Apellido, Mail from user_table where DNI_user = '$Dni_user'");
        $row = $sql_info->fetch_assoc();
        $username = $row['Nombre'];
        $usersurname = $row['Apellido'];
        $mail=$row['Mail'];
        ?>
<h2>
    <div class="dei">Dei<span class="bank">Bank</span></div>
</h2> 
<div class="informacion-cuenta">
<h1>Informacion de cuenta</h1>
        <ul>
            <li>Nombre: <?php echo $username?></li>
            <li>Apellido: <?php echo $usersurname ?></li>
            <li>DNI: <?php echo $Dni_user?></li>
            <li>Identificador de cuenta: <?php echo $Ident_cuenta ?></li>
            <li>Correo electronico: <?php echo $mail?></li>
        </ul>

        <form action="http://localhost/Banco2.0/inicio/inicio.php" method="get">
            <input type="hidden" name="Id_cuenta" value="<?php echo $Ident_cuenta?>">
            <input type="hidden" name="username" value="<?php echo $username?>">
            <input type="hidden" name="usersurname" value="<?php echo $usersurname?>">
            <button>Volver</button>
        </form>
    </div>
   

</body>
</html>