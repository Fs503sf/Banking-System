<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeiBank</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #CFF1FF;
    }

    body{
        font-family: sans-serif;
    }

    .navbar .logo{
        float: left;
    }
    .dei {
        color: black; /* Color del texto "Dei" */
    }

    .bank {
        color: #ffff; /* Color del texto "Bank" */
    }

    .navbar {
        background-color: #007bff; /* Color de fondo de la barra de navegación */
        overflow: hidden;
        padding: 15px;
    }

    .navbar a {
        float: left; /* Hace que el elemento flote a la izquierda */
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .navbar a:hover {
        background-color: #ddd; /* Cambia el color de fondo cuando pasas el ratón sobre el enlace */
        color: black;
    }

    .navbar .right {
        float: right;
        margin-right: 60px;
        font-size:18px; /* Hace que los elementos floten a la derecha */
    }

    .hub-cards-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap; /* Permite que las secciones se envuelvan si el espacio es insuficiente */
        }

    .hub-card {
            border: 1px solid #ddd; /* Agrega un borde para visualización */
            margin-bottom: 20px; /* Espaciado entre las secciones */
            padding: 20px;
            min-height: 300px; /* Establece la altura mínima deseada */
            max-width: 45%;
        }

    .hub-card-img img {
            max-width: 70%; /* Asegura que la imagen no sobrepase el ancho del contenedor */
            height: auto; /* Permite que la altura de la imagen se ajuste proporcionalmente al ancho */
    }

    section{
        background-color: white;
    }

    .email{
        color: #00D9FB;
        font-size: 19px;
    }

    .navbar .logo{
        color:white;
        margin-top:-5px;
    }

    
</style>
</head>
<body>

<div class="navbar">
    <h2> 
        <div class="logo">
            <div class="dei">
                Dei
                <span class="bank">
                Bank
                </span>
            </div>
        </div>
    </h2>
    <div class="right">
        <a href="http://localhost/Banco2.0/login/login.php">Iniciar Sesión</a>    
        <a href="http://localhost/Banco2.0/register/register.php">Abrir Cuenta Gratis</a>
    </div>
</div>
<br>
<center>
<div class="hub-cards-container"> 
<section class="hub-card">
    <h3>Tene una cuenta gratis y sin burocracia</h3>
    <div class="hub-card-img">
        <img src="https://www.processmaker.com/wp-content/uploads/2020/05/banking-Commercial.png" alt="">
    </div>
    <p class="hub-card_description">100% digital, la abrís en minutos y podés manejar tus finanzas como quieras.
    </p>
</section>

<section class="hub-card">
    <h3>Transferi y maneja tu dinero como como te plazca</h3>
    <div class="hub-card-img">
        <img src="https://www.processmaker.com/wp-content/uploads/2020/05/banking-Retail-Account.png" alt="">
    </div>
    <p class="hub-card_description ">¡Descubri la libertad financiera con nuestro banco innovador! La flexibilidad que necesitas
    </p>
</section>
</div>
<br>
<a class="email">&#128231; ayuda.DeiBank@gmail.com</a>

</center>
</html>