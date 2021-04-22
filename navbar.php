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
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Icons">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="images/kajou.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link active categories" aria-current="page" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-icons">
                                    menu
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li>
                            <form class="d-flex search">
                                
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Electronique</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action before</a></li>
                                        <li><a class="dropdown-item" href="#">Another action before</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                    
                                    <input type="text" class="form-control" aria-label="Text input" placeholder="Rechercher">
                                    <button class="btn btn-outline-secondary btn-brand" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="material-icons md-light">
                                        search
                                    </span>
                                    </button>
                                    
                                </div>

                            </form>
                        </li>

                        <li class="nav-item dropdown content-end">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                FR
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">EN</a></li>
                                <li><a class="dropdown-item" href="#">ES</a></li>
                                <li><hr class="dropdown-item" href="#">KR</li>
                            </ul>
                        </li>

                        <li class="nav-item  content-end">
                            <a class="nav-link" href="#">
                                <span class="material-icons">
                                    favorite_border
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="material-icons">
                                    add_shopping_cart
                                </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="material-icons">
                                    person_outline
                                </span>
                            </a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
    </body>
</html>