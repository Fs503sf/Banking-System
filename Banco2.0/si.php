<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta creada con exito</title>
    <style>
    
    body{
        font-family: sans-serif;
    }

    .dei {
        color: black; /* Color del texto "Dei" */
    }

    .bank {
        color: #2980b9; /* Color del texto "Bank" */
    }
    .alert {
      padding: 15px;
      background-color: #4CAF50; 
      color: white;
      margin-bottom: 15px;
    }

    .links {
        text-align: center;
        margin-top: 20px;
    }

    .links a {
        display: inline-block;
        padding: 10px 20px;
        margin: 0 10px;
        text-decoration: none;
        color: #fff;
        background-color: #3498db;
        border-radius: 5px;
        transition: background-color 0.3s;
        font-size: 20px;
    }

    .links a:hover {
        background-color: #2980b9;
    }
  </style>
</head>
<?php
include ("E:/wamp64/www/banco2.0/register/registrar.php");
include ("E:/wamp64/www/banco2.0/con_db.php");

    $DNI_user=$_GET['DNI_user'];

    $sql1=$conex->query("select Ident_cuenta from account_table where DNI_user= '$DNI_user'");
    $userdata=$sql1->fetch_assoc();
    $Id_usuario=$userdata['Ident_cuenta'];
?>
<body>
    <h2>
        <div class="dei">Dei<span class="bank">Bank</span></div>
    </h2>
    <h2>
        <div class="alert">
            Su cuenta ha sido creada con exito, su numero de Identificador de cuenta es: <?php echo $Id_usuario ?>
        </div>
    </h2>
    <br>
    <br>
    <br>
    <div class="links">
        <a href="http://localhost/Banco2.0/login/login.php">Iniciar Sesión</a>    
        <a href="http://localhost/Banco2.0/index.php">Volver  pagina principal</a>
    </div>
</body>
</html>