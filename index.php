<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous" defer></script>
    <title>Maximmo</title>
</head>

<body>
    <!-- Navbar -->
    <div class="body">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid p-4">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <img src="./assets/image/Exclude.svg" height="25px" alt="logo">
                    <a class="navbar-brand" href="#">MaxImmo</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Catalogue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Contactez-moi</a>
                        </li>
                    </ul>
                    <a class="btn btn-outline-warning" href="#" role="button">Se faire rappeler</a>
                </div>
            </div>
        </nav>
        <!-- Jumbotron -->
        <div class="container-fluid shadow bsremove ">
            <div class="p-5 mb-4  jumbotron">
                <div class="container-fluid py-5">
                    <div class="col-6">
                        <h1 class="display-5 fw-bold"><span style="color:#C0DFF8; font-weight:700; font-family:'khula'">Trouvez le bien</span><br> qui vous correspond</h1>
                        <p class="col-md-8 fs-4">A vos côté depuis 2012, je vous accompagne dans vos projets immobiliers.</p>
                    </div>
                    <div class="col-6">
    
                    </div>
    
                </div>
            </div>
            <div class="row ms-3 me-3">
                <form class="d-flex mb-3 justify-content-between" action="">
                    <div class="col-3">
                        <div class="input-group">
                            <select class="form-select p-4" id="inputGroupSelect01">
                                <option selected>Rechercher par mot clé</option>
                                <option value="1">Maison</option>
                                <option value="2">Appartement</option>
                                <option value="3">Cabane</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group">
                            <select class="form-select p-4" id="inputGroupSelect01">
                                <option selected>Rechercher par mot clé</option>
                                <option value="1">Maison</option>
                                <option value="2">Appartement</option>
                                <option value="3">Cabane</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group h-100">
                            <input type="text" class="form-control" placeholder="Localisation recherchée" aria-label="Localisation recherchée" aria-describedby="inputGroup-sizing-default">
                        </div>
    
                    </div>
                    <button class="btn btn-warning col-2" type="submit">Trouver un bien</button>
                </form>
    
    
            </div>
        </div>
        <!-- Nos partenaires -->
        <h2>Nos partenaires</h2>
        <div class="row mb-5">
            <div class="col-3 pe-0">
                <p>Nous sommes agréés avec les plus grandes agences immobilières de la région.</p>
            </div>
        </div>
        <div class="container-fluid bsremove d-flex section">
            <div class="col-6 d-flex  partenaire">
                <div class="col-7 me-3">
                    <img src="./assets/image/colorful-buildings-narrow-street-spanish-town-garachico-sunny-day-tenerife-canary-islands-spain 1.png" alt="image1">
                </div>
                <div class="col-4 d-flex align-items-end">
                    <img src="./assets/image/colorful-buildings-narrow-street-spanish-town-garachico-sunny-day-tenerife-canary-islands-spain 1 (1).png" alt="image2">
                </div>
            </div>
            <div class="col-6 d-flex flex-column justify-content-end">
                <div class="story d-flex">
                    <p>Ma Story</p>
                    <img src="./assets/image/Line separator.svg" alt="line">
                </div>
                <div class="argument">
                    <h2>Le moyen le plus simple et le plus rapide pour trouver</h2>
                    <p>Créée en 2012, l'agence MaxImmo est maintenant reconnue dans toute la région Grande-Aquitaine et régions voisines.</p>
                </div>
                <div class="icone d-flex">
                    <div class="col-6 d-flex">
                        <div class="box"><i class="fa-solid fa-gear"></i></div>
                        <div>
                            <h4>Fiabilité</h4>
                            <p>Un sens du service inégalé</p>
                        </div>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="box"><i class="fa-solid fa-wallet"></i></div>
                        <div>
                            <h4>Efficité</h4>
                            <p>La qualité au Rendez-vous</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid service d-flex justify-content-center ">
        <div class="text-box">
            <h2>Tous Les services <br>que nous proposons</h2>
        </div>

    </div>

</body>

</html>