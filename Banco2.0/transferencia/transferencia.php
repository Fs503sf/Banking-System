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
            margin-top: 20px;
        }

        h1 {
            font-size: 24px;
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
    </style>
</head>
<body>
<?php
$userId_cuenta=$_GET['Ident_cuenta'];
$username=$_GET['username'];
$usersurname=$_GET['usersurname'];
?>
<h2>
    <div class="dei">Dei<span class="bank">Bank</span></div>
</h2>
    <center>
        <div class="main_title">
            <h1>Hacer transferencia</h1>
        </div>
    </center>

    <center>
        <form method="post">
            <h2>Completa los datos del receptor</h2>

            <label for="Id_cuenta2">Número de identificador de cuenta:</label>
            <input type="text" id="Id_cuenta2" name="Id_cuenta2" placeholder="Número de identificador de cuenta">
            <br>
            <label for="Dni_cuenta2">DNI del titular:</label>
            <input type="text" id="Dni_cuenta2" name="Dni_cuenta2" placeholder="DNI del titular">

            <div class="button">
                <input name="siguiente" class="btn" type="submit" value="Siguiente">
            </div>
        </form>
    </center>
    <form action="http://localhost/Banco2.0/inicio/inicio.php" method="get">
       <input type="hidden" name="Id_cuenta" value="<?php echo $userId_cuenta?>">
       <input type="hidden" name="username" value="<?php echo $username?>">
       <input type="hidden" name="usersurname" value="<?php echo $usersurname?>">
        <button>Volver al inicio</button>
    </form> 

    <?php
    include("E:/wamp64/www/Banco2.0/transferencia/validacionCuenta2.php");
?>
</body>
</html>
