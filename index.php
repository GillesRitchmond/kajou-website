<!DOCTYPE html>
<html>
    <head>
        <title>KAJOU</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous">

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" href="Style/style.css" type="text/css">
    </head>

    <body>
        <?php include("navbar.php"); ?>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Plus de variété, plus d’articles, plus de bonheur</h1>
                        <hr class="mt-4">
                        <p>Obtenez l’appareil électronique que vous voulez avec ces offres.</p>

                        <a href="#" class="btn btn-brand mt-4">Voir plus</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Les meilleurs produits sont à votre disposition</h1>
                        <hr class="mt-4">
                        <p>Nous sommes là pour répondre à vos besoins</p>

                        <a href="#" class="btn btn-brand mt-4">Voir plus</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Créez votre compte et obtenez une réduction de 30%</h1>
                        <hr class="mt-4">
                        <p>Obtenez l’appareil électronique que vous voulez avec ces offres.</p>

                        <a href="#" class="btn btn-brand mt-4">Voir plus</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <img src="images/juice.png" alt="" class="img-rectangle">
                </div>
                <div class="col-md-3">
                    <h3 class="red-text"> Profitez de plus d’articles et d’avantages </h3>
                    <p> Obtenez les fournitures de bureau que vous voulez avec ces offres.</p>
                </div>
                <div class="col-md-3">
                    <img src="images/desktop.png" alt="" class="img-rectangle">
                </div>
                <div class="col-md-3">
                    <h3 class="red-text"> Profitez de plus d’articles et d’avantages </h3>
                    <p> Obtenez les fournitures de bureau que vous voulez avec ces offres.</p>
                </div>
            </div>

            <div class="content mt-5">
                <h3 class="red-text">Explorez les catégories populaires</h3>
                <div class="row py-3">
                    <div class="col">
                        <div class="card">
                            <img src="images/coffee.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="images/rechaud.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="images/cake.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img src="images/camera.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="images/cake.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="images/camera1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>