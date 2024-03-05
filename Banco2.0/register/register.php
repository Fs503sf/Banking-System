<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles_register.css">
    <title>Registrarse</title>
    <link rel="icon" href="imagenes/favicon (1).ico">
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
            margin-top: 12px;
        }

        input {
            width: 95%;
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
            <h1>Registro: Crear cuenta bancaria</h1>
        </div>
    </center>

    <center>
        <form method="post">
            <h1>Complete el formulario</h1>

            
                <label for="Nombre_register_usuario">Ingrese su nombre:</label>
                <input type="text" id="Nombre_register_usuario" name="Nombre_register_usuario" placeholder="Ingrese su nombre" class="form-control">
            

            
                <label for="Apellido_register_usuario">Ingrese su apellido:</label>
                <input type="text" id="Apellido_register_usuario" name="Apellido_register_usuario" placeholder="Ingrese su apellido" class="form-control">
            

            
                <label for="DNI_register_usuario">Ingrese su número de DNI:</label>
                <input type="text" id="DNI_register_usuario" name="DNI_register_usuario" placeholder="Ingrese su número de DNI" class="form-control">
            

            
                <label for="Email_register_usuario">Ingrese su dirección de email (en caso de no poseer dejar en blanco):</label>
                <input type="email" id="Email_register_usuario" name="Email_register_usuario" placeholder="Ingrese su dirección de email (opcional)" class="form-control">
            

            
                <label for="Clave_register_usuario">Cree su clave bancaria, debe poseer 6 digitos numerales:</label>
                <input type="password" id="Clave_register_usuario" name="Clave_register_usuario" placeholder="Cree su clave bancaria (6 dígitos)" class="form-control">
                <span class="error">La clave debe contener 6 dígitos numéricos</span>
            <br>
            <div class="button">
            <input type="submit" value="Registrarse" name="register" class="btn btn-primary">
            </div>
        </form>
    </center>

    <?php
        include("E:/wamp64/www/Banco2.0/register/registrar.php");
    ?>
</body>
</html>