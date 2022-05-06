<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/sweetalert2.min.css">
        <script src="js/sweetalert2.all.min.js"></script>
    </head>
    <body>
        <div id="login-button">
            <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
            </img>
            </div>
            <div id="container">
            <h1>Log In</h1>
            <span class="close-btn">
                <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
            </span>

            <form method="POST">
                <input type="text" name="txtUsuario" placeholder="Usuario">
                <input type="password" name="txtClave" placeholder="Clave">
                <input type="submit" value="Login">
                <div id="remember-container">
                </div>
            </form>
            <?php
                session_start();
                if (isset($_POST["txtUsuario"])){ //SIRVE PARA PREGUNTAR SI SE HA PRESIONADO EL BOTON SUBMIT
                    include_once "../backend/conexion.php";
                    $_SESSION["LOGIN"] = 0;
                    $usu = $_POST["txtUsuario"];
                    $cla = $_POST["txtClave"];

                    $sql = "SELECT * FROM USUARIO WHERE USUARIO = '".$usu."' AND CLAVE = '".$cla."'";

                    $resultSet = mysqli_query($conexion, $sql);
                    $cantidad = mysqli_num_rows($resultSet);

                    if ( $cantidad > 0 ){
                        echo "<script>
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'Bienvenido a los juegos del hambre',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                        
                        </script>";
                        $_SESSION["LOGIN"] = 1;
                        $_SESSION["MENU"] = 0;
                        header("location:principal.php");
                    }else{
                        echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Contraseña incorrecta!'
                          })
                        </script>";
                    }
                }
            ?>
            </div>

            <!-- Forgotten Password Container -->
            <div id="forgotten-container">
            <h1>Forgotten</h1>
            <span class="close-btn">
                <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
            </span>

            <form>
                <input type="email" name="email" placeholder="E-mail">
                <a href="#" class="orange-btn">Get new password</a>
            </form>
        </div>

        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/TweenMax.min.js"></script>
        <script src="js/login.js"></script>
        
    </body>
</html>