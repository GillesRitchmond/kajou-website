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

                            <div id="infos" class="login-content">
                                <h2>Informations personnelles</h2>

                                <div class="mt-4 mb-4 form-floating">
                                    <input type="text" class="form-control" name="code_user" required>
                                    <label for="floatingInput">Nom</label>
                                    <span class="invalid-feedback"></span>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="password" required>
                                    <label for="floatingInput">Prénom</label>
                                </div>
                                <div class="col">
                                    <button class="col-12 btn btn-brand" onclick="infosOnClick();return false;" type="submit">suivant</button>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md box-circle">
                                        <span class="material-icons fs-6">circle</span>
                                        <span class="material-icons fs-6">radio_button_unchecked</span>
                                        <span class="material-icons fs-6">radio_button_unchecked</span>
                                    </div>
                                </div>
                            </div>

                            <div id="contact" class="login-content">
                                <h2>Contact et adresse</h2>

                                <div class="mt-4 mb-4 form-floating">
                                    <input type="number" class="form-control" name="code_user" required>
                                    <label for="floatingInput">Téléphone</label>
                                    <span class="invalid-feedback"></span>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="password" required>
                                    <label for="floatingInput">Adresse</label>
                                </div>
                                <div class="col">
                                    <button class="col-12 btn btn-brand" onclick="contactOnClick();return false;" type="submit">suivant</button>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md box-circle">
                                        <span class="material-icons fs-6">radio_button_unchecked</span>
                                        <span class="material-icons fs-6">circle</span>
                                        <span class="material-icons fs-6">radio_button_unchecked</span>
                                    </div>
                                </div>
                            </div>


                            <div id="identifiant" class="login-content">
                                <h2>Identifiant</h2>

                                <div class="mt-4 mb-4 form-floating">
                                    <input type="text" class="form-control" name="code_user" required>
                                    <label for="floatingInput">Nom</label>
                                    <span class="invalid-feedback"></span>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="password" required>
                                    <label for="floatingInput">Mot de passe</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="password" required>
                                    <label for="floatingInput">Confirmer votre mot de passe</label>
                                </div>
                                <div class="col">
                                    <button class="col-12 btn btn-brand" type="submit">Je m'inscris</button>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md box-circle">
                                        <span class="material-icons fs-6">radio_button_unchecked</span>
                                        <span class="material-icons fs-6" on>radio_button_unchecked</span>
                                        <span class="material-icons fs-6">circle</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>

    <script type="text/javascript">
        $infos = document.getElementById("infos");
        $contact = document.getElementById("contact");
        $identifiant = document.getElementById("identifiant");

        hide($contact);
        hide($identifiant);

        function infosOnClick(){
            hide($infos);
            show($contact);
        } 

        function contactOnClick(){
            hide($infos);
            hide($contact);
            show($identifiant);
        }

        // function infosOnClick(){
        //     hide($infos);
        //     show($contact);
        // }

        function hide(elements) {
            elements = elements.length ? elements : [elements];
            for (var index = 0; index < elements.length; index++) {
                elements[index].style.display = 'none';
            }
        }

        function show(elements, specifiedDisplay) {
            elements = elements.length ? elements : [elements];
            for (var index = 0; index < elements.length; index++) {
                elements[index].style.display = specifiedDisplay || 'block';
            }
        }
    </script>
</body>

</html>