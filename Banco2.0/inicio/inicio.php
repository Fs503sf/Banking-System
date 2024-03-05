
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portal</title>

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

        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }

        .balance-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 120px;
        }

        .balance-label {
            font-size: 30px;
            font-weight: bold;
            color: #333;
        }

        .balance-amount {
            font-size: 33px;
            font-weight: bold;
            color: #007bff;
            margin-left: 10px;
        }

        .buttons-container {
            display: flex;
            justify-content: space-around;
            margin-top: 150px;
            margin-left:320px;
            margin-right:320px;
        }

        .buttons-container button {
            background-color: #007bff;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 23px;
        }
        .logout-button {
            position: absolute;
            top: 0;
            right: 0;
            height: 60px;
            width: 90px;
            font-size: 15px;
            font-weight: bold;
            color: #fff;
            background-color: #d9534f;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-top:4px;
            margin-right:8px;
        }

        .email{
        color: #00D9FB;
        font-size: 19px;
    }

        
    </style>
</head>
<body>

<?php
    include ("E:/wamp64/www/banco2.0/login/validation.php");
    include ("E:/wamp64/www/banco2.0/con_db.php");

    $username=$_GET['username'];
    $usersurname=$_GET['usersurname'];
    $userId_cuenta=$_GET['Id_cuenta'];

    $sql1=$conex->query("select Saldo from account_table where Ident_cuenta= '$userId_cuenta'");
    $currentBalance=$sql1->fetch_assoc()['Saldo'];
    $saldo=doubleval($currentBalance);

?>
<script>
     function redirectToAnotherLink() 
     {
        var newLink = "http://localhost/Banco2.0/index.php";
        window.location.href = newLink;
    }
</script>

     <h2>
    <div class="dei">Dei<span class="bank">Bank</span></div>
    </h2>
    <br>

<h1>Hola, <?php echo $username. " " .$usersurname . "<br>"; ?></h1>

<div class="balance-container">
    <span class="balance-label">Saldo Disponible:</span>
    <span class="balance-amount">$<?php echo $saldo; ?></span>
</div>
    
<div class="buttons-container">
    
    <form action="http://localhost/Banco2.0/transferencia/transferencia.php" method="get">
       <input type="hidden" name="Ident_cuenta" value="<?php echo $userId_cuenta?>">
       <input type="hidden" name="username" value="<?php echo $username?>">
       <input type="hidden" name="usersurname" value="<?php echo $usersurname?>">
        <button>Hacer transferencia</button>
    </form> 

    <form action="http://localhost/Banco2.0/miInfo/miInfo.php" method="get">
        <input type="hidden" name="Ident_cuenta" value="<?php echo $userId_cuenta ; ?>">
        <button>Información de cuenta</button>
    </form>

    <form action="http://localhost/Banco2.0/miInfo/miInfo.php" method="get">
        <input type="hidden" name="Ident_cuenta" value="<?php echo $userId_cuenta ; ?>">
        <button>Ultimos movimientos</button>
    </form>
</div>

    <button class="logout-button" onclick= "redirectToAnotherLink()" >Cerrar sesión</button>
<br>
<br>
<br>
<br>
<center>
    <a class="email">&#128231; ayuda.DeiBank@gmail.com</a>
</center>


</body>
</html>