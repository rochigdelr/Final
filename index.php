<?php 

include "config.php";
session_start();
error_reporting(0);

if(isset($_SESSION['username'])){
    if ($_SESSION['id_rol'] == 1) {
        header("Location: perfil_vendedor.php");
    } else {
        header("Location: perfil_comprador.php");
    }
}

if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $pass=$_POST["pass"];

    $sql="SELECT * FROM users WHERE email='$email' AND pass='$pass'";
    $result=mysqli_query($conexion, $sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['id_rol'] = $row['id_rol'];
        if ($_SESSION['id_rol'] == 1) {
            header("Location: perfil_vendedor.php");
        } else {
            header("Location: perfil_comprador.php");
        }
    }else{
        echo "<script>alert('Usuario o contraseña incorrectos!')</script>";
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

    <title>Login</title>

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

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <img src="/Users/rochigarciadelrio/Downloads/startbootstrap-sb-admin-2-gh-pages  2222/img/messi_gol_seleccixn_argentina.jpg_1213823801.jpg.webp" >
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                                    </div>
                                    <form method="post" class="usuario">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input name="pass" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Acuerdate</label>
                                            </div>
                                        </div>
                                        <button name="submit" type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <!-- 
                                            <a href="index.html" class="hidden btn btn-google btn-user btn-block">
                                                <i class="fab fa-google fa-fw"></i> Login con Google
                                            </a>
                                            <a href="index.html" class="hidden btn btn-facebook btn-user btn-block">
                                                <i class="fab fa-facebook-f fa-fw"></i> Login con Facebook
                                            </a>
                                        -->
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Te olvidaste la contraseña?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="registro.php">Creá tu cuenta!</a>
                                    </div>
                                </div>
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