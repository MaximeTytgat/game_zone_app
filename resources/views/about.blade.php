<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <title>A propos</title>
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
    <div class="titlePropos">
       <a href="{{asset('aboutEN.blade')}}"></a> <h2>Qui sommes-nous ?</h2>
    </div>
    <div class="container">

        <img src="{{asset('images/logoPropos.png')}}" alt="logo_game_zone">
        <p class="description">
            <strong>Le parc d’attraction Game Zone</strong><br>
            <br>
            Est un parc où les jeux-vidéos prennent vie !<br>
            <br>
            De Contagion VR à Battle Royale, revivez vos expériences
            passées avec nos parcs d’attractions.<br>
            <br>
            Une expérience unique et magique vous
        </p>
    </div><br>

    <div class="titlePropos">
        <h2>Nos services</h2>
    </div><br>
    <p class="description">
        <strong>Simplicité</strong> <br>
        Un instant de plaisir sans contrainte avec un
        site accessible et convivial.<br>
        <br>
        <strong>Proximité</strong><br>
        Être à vos côtés et à votre écoute avec un service client
        situé dans nos locaux, à proximité des équipes.<br>
        <br>
        <strong>Confiance</strong><br>
        Vous proposer la qualité, les meilleurs prix et des services
        d’une grande enseigne, pour une expérience en toute sérénité.<br>
        <br>
        <strong>Passion</strong><br>
        Vous accompagner au cœur de vos achats (boutique en ligne)
        avec des équipes passionnées par leurs produits et leur métier.<br>
    </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    @include('footer')

</body>

</html>