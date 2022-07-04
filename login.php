<?php
    include 'admin/config/config.php';

    include 'admin/config/connexion.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/assets/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row">
                            <img src="admin/assets/img/ceemuci_logo.jpg" class="logo px-4">
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="admin/assets/img/techno.png" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row px-3 mb-4">
                            <div class="line"></div>
                            <small class="or text-center"></small>
                            <div class="line"></div>
                        </div>
                        <form method="post">
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Email Address</h6></label>
                                <input class="mb-4 form-control" type="email" name="email" placeholder="Enter a valid email address" require>
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                                <input class="form-control" type="password" name="password" placeholder="Enter password"require>
                            </div>

                            <div class="row mb-3 px-3">
                                <input type="submit" name="submit" class="btn btn-success text-center" value="SE CONNECTER">
                            </div>
                            <div class="row mb-4 px-3">
                            <small class="font-weight-bold">Vous n'avez pas de compte? <a href="signup.php" class="text-danger ">S'enregistrer'</a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-success text-light text-center py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2022. All rights reserved.</small>
                    <div class="social-contact ml-4 ml-sm-auto">
                        <span class="fab fa-facebook mr-4 text-sm"></span>
                        <span class="fab fa-google-plus mr-4 text-sm"></span>
                        <span class="fab fa-linkedin mr-4 text-sm"></span>
                        <span class="fab fa-twitter mr-4 mr-sm-5 text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="admin/assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="admin/assets/fontawesome/js/all.min.css">
    <script src="admin/assets/js/login.js"></script>
</body>
</html>
