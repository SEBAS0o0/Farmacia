<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css "href="css/style.css">
    <link rel="stylesheet" type="text/css "href="css/css/all.min.css">
</head>
<?php
session_start();
if(!empty($_SESSION['us_tipo'])){
    header('Location:controlador/LoginController.php');
}
else{
    session_destroy();
?>
<body>

    <img class="wave"src="img/tienda.png" alt="">

    <div class="contenedor">
        <div class="img">
        <img src="https://i.gifer.com/ZkIi.gif" alt="" style="width: 400px;position: relative;top: 50px;left:-130px;">
            <img src="img/doc.gif" alt="">
            <img src="http://www2.udec.cl/~xfuentealba/moto.gif" alt="" style="width:300px; position: absolute;top: 400px;left: 400px;">
        </div>
        
        <div class="contenido-login">
        
            <form action="controlador/LoginController.php" method="post">
            
                <img src="img/doctora0.png" alt="">
                <h2>Farmacia</h2>
                <div class="input-div dni">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>DNI</h5>
                        <input type="text" name="user" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contrasena</h5>
                        <input type="password" name="pass" class="input">
                    </div>
                </div>
                <a href="../vista/recuperar.php">recuperar password</a>
                <a href="">Created Warpiece</a>
                <input type="submit" class="btn" value="iniciar Sesion">
                <img src="img/perr1.gif" alt="" style="left: -60px;position:relative;width: 100px;top: -430px;">
            </form>
        
        </div>
        
    </div>
</body>
<script src="js/login.js"></script>
</html>
<?php
}
?>