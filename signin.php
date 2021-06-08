<!DOCTYPE html>
<html>

<head>
    <title>KAJOU</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="Style/style.css" type="text/css">

    <!-- GOOGLE ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons">
</head>

<body class="login-page">
    <div class="container login-container">

        <div class="top-content mb-5">
            <div class="float-start fs-4">
                <span class="material-icons text-dark align-middle">arrow_back</span> Retour
            </div>

            <div class="float-end">
                <li class="nav-link dropdown content-end">
                    <a class="nav-link text-dark dropdown-toggle fs-5" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        FR
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">EN</a></li>
                        <li><a class="dropdown-item" href="#">ES</a></li>
                        <li><a class="dropdown-item" href="#">KR</a></li>
                    </ul>
                </li>
            </div>
        </div>

        <div class="login-card">
            <form method="POST">
                <div class="box">
                    <div class="form-row">
                        <div class="form-card">
                            <!-- <h3>Connectez-vous</h3> -->
                            <div class="img-logo-brand">
                                <img src="images/kajou.png" alt="" class="logo-brand">
                            </div>
                            <!-- <hr> -->

                            <div class="login-content">
                                <h2>CONNEXION</h2>

                                <div class="mt-4 mb-4 form-floating">
                                    <input type="email" class="form-control" name="code_user" required>
                                    <label for="floatingInput">Email</label>
                                    <span class="invalid-feedback"></span>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="password" class="form-control" name="password" required>
                                    <label for="floatingInput">Mot de passe</label>
                                </div>
                                <div class="col">
                                    <button class="col-12 btn btn-brand" type="submit">Se connecter</button>
                                </div>

                                <div class="col link mt-2">
                                    <div class="col">
                                        <a href="#" class="text-muted nav-link">Mot de passe oublier ?</a>
                                    </div>
                                    <div class="col">
                                        <a href="signup.php" class="text-muted nav-link">S'inscrire</a>
                                    </div>
                                    <!-- <div class="col">
                                        <a href="#" class="nav-link">Terms of use. Privacy policy</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
</body>

</html>