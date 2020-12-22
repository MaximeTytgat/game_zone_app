<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
    <title>Connexion</title>
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
    <img class="picture" src="{{asset('images/astrobotAccount.png')}}" alt="astro_bot">
    <div class="containerWhite">
        <form action="/connexion" method="post">
            <div>
                <label for="name">Utilisateur :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div>
                <label for="mail">Mot de passe :</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <p>Vous n'avez pas encore de compte ?<a href="">Inscrivez-vous</a> </p>
            <div class="button">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
    <div class="containerBlue">
        <h2>S'inscrire</h2>
        <form action="/inscription" method="post">
            <div>
                <label class="labelSubscribe" for="name">Nom :</label>
                <input class="inputSubscribe" type="text" id="surname" name="user_surname">
            </div>
            <div>
                <label class="labelSubscribe" for="name">Prenom :</label>
                <input class="inputSubscribe" type="text" id="name" name="user_name">
            </div>
            <div>
                <label class="labelSubscribe" for="country">Ville :</label>
                <input class="inputSubscribe" type="text" id="country" name="user_country">
            </div>
            <div>
                <label class="labelSubscribe" for="name">Pseudo :</label>
                <input class="inputSubscribe" type="text" id="pseudo" name="user_pseudo">
            </div>
            <div>
                <label class="labelSubscribe" for="mail">Mot de passe :</label>
                <input class="inputSubscribe" type="password" id="password" name="password">
            </div>
            <div>
                <label class="labelSubscribe" for="mail">Mot de passe :</label>
                <input class="inputSubscribe" type="password" id="password" name="password">
            </div>
            <div class="rgpd">
                <input class="checkboxInput" type="checkbox" id="scales" name="scales" checked>
                <label for="scales">J'accepte les conditions d'utilisation.</label>
            </div>
            <div class="button">
                <button class="buttonSubscribe" type="submit">Valider</button>
            </div>
        </form>
        <div class="avatar">
            <button class="buttonSnake"><img src="{{asset('images/gaming_snake 1.png')}}" alt=""></button>
            <button class="buttonBird"><img class="bird" src="{{asset('images/gaming-bird 1.png')}}" alt=""></button>
            <button class="buttonWolf"><img src="{{asset('images/gaming-wolf 1.png')}}" alt=""></button>
            <button class="buttonPirate"><img src="{{asset('images/gaming-pirate 1.png')}}" alt=""></button>
        </div>
    </div>
    <p class="xp">Explication systeme de gain d’xp</p>
    <!-- footer -->
    <img class="backToTop" src="{{asset('images/backToTop.png')}}" alt="back_to_top">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>