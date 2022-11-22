<?php

include "config.php";
error_reporting(0);
session_start();

if(isset($_SESSION['username'])){
    header("Location: index.php");
}

if(isset($_POST["submit"])){
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $adress = $_POST["adress"];
    $pass2 = $_POST["pass2"];
    $id_rol = $_POST["id_rol"];

    if($pass == $pass2){
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conexion, $sql);
        if(!$result->num_rows > 0){
            $sql="INSERT INTO users (username, email, pass, firstname, lastname, phone, adress, id_rol) VALUES ('$username', '$email', '$pass','$firstname', '$lastname', '$phone', '$adress', '$id_rol')";
            $result=mysqli_query($conexion, $sql);
            if($result){
                echo "<script>alert('Usuario registrado correctamente!')</script>";
            }else{
                echo "<script>alert('Error al registrar usuario!')</script>";
            }
        }else{
            echo "<script>alert('El email ya existe!')</script>";
        }
    }else{
        echo "<script>alert('Las contraseñas no coinciden!')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro Vendedor</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Creá tu cuenta!</h1>
                            </div>
                            <form method="POST" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input 
                                        name="firstname"
                                        type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nombre">
                                    </div>
                                    <div class="col-sm-6">
                                        <input 
                                        name="lastname"
                                        type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input 
                                    name="email"
                                    type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input
                                    name="phone"
                                    type="tel" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Teléfono">
                                </div>
                                <div class="form-group">
                                    <input 
                                    name="adress"
                                    type="text" class="form-control form-control-user" id="exampleInputDirecciónl"
                                        placeholder="Dirección">
                                </div>
                                <div class="form-group">
                                    <input 
                                    name="username"
                                    type="text" class="form-control form-control-user" id="exampleInputDirecciónl"
                                        placeholder="Username">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input 
                                        name="pass"
                                        type="password" class="form-control form-control-user" id="exampleUsuario"
                                        placeholder="Contraseña">
                                    </div>
                                    <div class="col-sm-6">
                                        <input 
                                        name="pass2"
                                        type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Repetir contraseña">
                                    </div>
                                </div>
                                <input type="hidden" name="id_rol" value="1">
                                <button name="submit" type="submit" class="btn btn-primary btn-user btn-block">
                                    Registrarse
                                </button>
                               
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Registrate con Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Registrate con Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Te olvidaste la contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Ya tenes una cuenta? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>