<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
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
        cursor: pointer;
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
            width: 95%;
            padding: 9px;
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
<script>
  function redireccionar() {
    // Redirigir a la URL deseada
    window.location.href = "http://localhost/Banco2.0/index.php";
  }
</script>
    <h2>
        <div class="dei" onclick="redireccionar()">Dei<span class="bank">Bank</span></div>
    </h2>

    <center>
        <div class="main_title">
            <h1>Bienvenido a la Banca Online</h1>
        </div>

        <?php
            include("E:/wamp64/www/Banco2.0/login/validation.php");
            include("E:/wamp64/www/Banco2.0/con_db.php");
        ?>
    </center>

    <center>
        <form method="post">
            <h1>Ingrese sus datos</h1>

            <label for="Nombre_usuario">Nombre:</label>
            <input type="text" id="Nombre_usuario" name="Nombre_usuario" placeholder="Nombre">

            <label for="Apellido_usuario">Apellido:</label>
            <input type="text" id="Apellido_usuario" name="Apellido_usuario" placeholder="Apellido">

            <label for="DNI_usuario">DNI:</label>
            <input type="text" id="DNI_usuario" name="DNI_usuario" placeholder="DNI">

            <label for="Clave_bancaria">Clave bancaria:</label>
            <input type="password" id="Clave_bancaria" name="Clave_bancaria" placeholder="Clave bancaria">

            <label for="Id_cuenta">Id de cuenta:</label>
            <input type="text" id="Id_cuenta" name="Id_cuenta" placeholder="Id de cuenta">

            <div class="button">
                <input name="login" class="btn" type="submit" value="Iniciar Sesion">

                <a href="http://localhost/Banco2.0/register/register.php">Registrarme</a>
            </div>
        </form>
    </center>

</body>
</html>
