<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/recruitment.css')}}">
    <title>Recrutement</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">GAME ZONE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{asset('index')}}">Le parc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{asset('attraction')}}">Les attractions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{asset('plan')}}">Le plan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{asset('game')}}">My game</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Préparer ma visite
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{asset('parc')}}">Se rendre au parc</a></li>
                            <li><a class="dropdown-item" href="{{asset('pricelist')}}">Tarif et billetterie</a></li>
                            <li><a class="dropdown-item" href="{{asset('timetable')}}">Horraire et calendrier</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{asset('info')}}">Infos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="recrutement">
        <h3>L'équipe GameZone recrute !</h3>
        <p>Voulez vous faire partie de l’aventure Game Zone ?
            Vous êtes vous passioné par les attractions et les jeux vidéos ?

            Rejoignez notre équipe !</p>
    </div>
    <div class="blue_background">
        <p>Nos postes a pourvoir :</p>
        <ul>
            <li>- Technicien (H/F)</li>
            <li>- Animateur (H/F)</li>
            <li>- Vendeur (H/F)</li>
            <li>- Chef d’animation (H/F)</li>
            <li>- Chef de projet (H/F)</li>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>

