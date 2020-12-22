<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/attraction.css')}}">
    <title>Document</title>
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
    <div class="jumbotron"></div>
    <div class="poppyTeam">
        <img src="{{asset('images/astroTeam.png')}}" alt="">
    </div>

    <div class="containerLeft">
        <div class="image_attraction">
            <img src="{{asset('images/contagion.png')}}" alt="">
        </div>
        <div class="text_attraction">
            <p><strong>Contagion VR</strong><br>
                <br>
                <strong>Gain XP : 1500 XP / partie</strong><br>
                <br>
                <strong>Interdit au moins d’1m30</strong><br>
                <br>
                Vous dirigez une équipe de soldats en charge de découvrir
                ce qui est arrivé aux scientifiques du laboratoire minier
                Omega Centuri B.<br>
                <br>
                Une fois à bord, vous apprenez qu’un terrible virus a fait muter tout l’équipage,
                et que la station spatiale est maintenant infestée par d’horribles zombies !
                Vous devez donc évacuer votre équipe en tentant de survivre le plus longtemps possible.
            </p>
            <a class="more_infos" href="#">En savoir plus</a>
        </div>
    </div>

    <div class="boxBlue">
        <div class="containerLeft">
            <div class="image_attraction">
                <img src="{{asset('images/hardteam.png')}}" alt="">
            </div>
            <div class="text_attraction">
                <p><strong>Fighter Hard Team</strong><br>
                    <br>
                    <strong>Gain XP : 1000 XP / partie</strong> <br>
                    <br>
                    <strong>Interdit au moins d’1m30</strong> <br>
                    <br>
                    Dans ce jeu, il n’y a plus de règle. Vous êtes équipé de la dernière
                    armure sensitive et vous ressentirez tous les coups que vos adversaires
                    vont vous porter.<br>
                    Attention donc à ne pas prendre de mauvais coups.
                    Une attraction déconseillée aux femmes enceintes
                </p>
                <a class="more_infos" href="#">En savoir plus</a>
            </div>
        </div>
    </div>

    <div class="containerLeft">
        <div class="image_attraction">
            <img src="{{asset('images/heroteamlast.png')}}" alt="">
        </div>
        <div class="text_attraction">
            <p><strong> Heroes team</strong><br>
                <br>
                <strong>Gain XP : 2500 XP / partie</strong><br>
                <br>
                <strong>Accessible à tous</strong><br>
                <br>
                L’attraction ultime de notre parc, un univers
                entièrement consacré aux super héros Marvel.
                Embarquez dans une navette qui vous fera voyager
                dans l’univers des gardiens de la
                galaxy, Spider-Man, Thor, Iron Man et plus encore. <br>
                <br>
                Une aventure unique dont vous serez le héros durant tout le voyage.
            </p>
            <a class="more_infos" href="#">En savoir plus</a>
        </div>
    </div>

    <div class="boxBlue">
        <div class="containerLeft">
            <div class="image_attraction">
                <img src="{{asset('images/figter.png')}}" alt="">
            </div>
            <div class="text_attraction">
                <p><strong>Super Fighter League</strong><br>
                    <br>
                    <strong>Gain XP : 1000 XP / partie</strong> <br>
                    <br>
                    <strong> Interdit au moins d’1m10</strong> <br>
                    <br>
                    Vous aimez les jeux de combat alors
                    bienvenue dans ce grand 8 aux couleurs des plus grands
                    combattants de l’histoire du jeu-vidéo : Ryu, Raiden,
                    Akuma, Yoshimitsu, Sub Zero, Scorpion et plus encore vont
                    vous défier dans ce manège à<br>

                </p>
                <a class="more_infos" href="#">En savoir plus</a>
            </div>
        </div>
    </div>

    <div class="containerLeft">
        <div class="image_attraction">

            <img src="{{asset('images/gamecenter.png')}}" alt="">
        </div>
        <div class="text_attraction">
            <p><strong>GAME CENTER</strong><br>
                <br>
                <strong> Gain XP : 500 XP / partie</strong><br>
                <br>
                <strong>Accessible à tous</strong><br>
                <br>
                Un espace de 3000 m2 dédié au Retro Gaming.
                Vous retrouverez toute l’ambiance des salles d’arcade des
                années 80 avec bornes de l’époque pour défier vos
                amis dans les meilleurs jeux retro : Mario, Centipede, Q Bert, Space invaders, Pac-Man...
            </p>
            <a class="more_infos" href="#">En savoir plus</a>
        </div>
    </div>

    <div class="boxBlue">
        <div class="containerLeft">
            <div class="image_attraction">
                <img src="{{asset('images/battleKart.png')}}" alt="">
            </div>
            <div class="text_attraction">
                <p><strong>Battle Kart</strong><br>
                    <br>
                    <strong>Gain XP : 1000 XP / partie</strong> <br>
                    <br>
                    <strong>Accessible à tous</strong> <br>
                    <br>
                    BattleKart, c’est la quintessence du jeu vidéo, de la réalité
                    augmentée et du karting électrique, réunis pour vous procurer
                    des sensations inédites entre amis, en familles ou entre collègues !<br>
                    C’est avant tout l’un des plus grands écrans de cinéma au monde (deux pistes de 2.000 m2) sur lequel nous projetons différents circuits et modes de jeu,
                    et sur lequel vous évoluez réellement plein gaz à bord d’un kart électrique, tout en interagissant avec le décor, les bonus, et les autres pilotes.<br>

                </p>
                <a class="more_infos" href="#">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="containerLeft">
        <div class="image_attraction">
            <img src="{{asset('images/championsLeague.png')}}" alt="">
        </div>
        <div class="text_attraction">
            <p><strong>Champions League</strong><br>
                <br>
                <strong>Gain XP : 1300 XP / partie</strong><br>
                <br>
                <strong>Accessible à tous</strong><br>
                <br>
                Dans ce jeu vous bénéficiez de la toute dernière
                technologie hologramme pour affronter les légendes du football
                en partenariat avec Konami et la licence de simulation de football PES.<br>
                Venez affronter sur le terrain Maradona, Pelé, Zidane, Messi
                et bien d’autres.
            </p>
            <a class="more_infos" href="#">En savoir plus</a>
        </div>
    </div>

    <div class="boxBlue">
        <div class="containerLeft">
            <div class="image_attraction">
                <img src="{{asset('images/survivor.png')}}" alt="">
            </div>
            <div class="text_attraction">
                <p><strong>Champions League Survivor</strong><br>
                    <br>
                    <strong>Gain XP : 1300 XP / partie</strong> <br>
                    <br>
                    <strong>Accessible à tous</strong> <br>
                    <br>
                    Dans ce jeu vous bénéficiez de la toute dernière
                    technologie hologramme pour affronter les légendes du football
                    en partenariat avec Konami et la licence de simulation de football PES.<br>
                    Venez affronter sur le terrain Maradona, Pelé, Zidane, Messi
                    et bien d’autres.
                </p>
                <a class="more_infos" href="#">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="containerLeft">
        <div class="image_attraction">
            <img src="{{asset('images/awsomeheroes.png')}}" alt="">
        </div>
        <div class="text_attraction">
            <p><strong> Awsome heroes team</strong><br>
                <br>
                <strong>Gain XP : 1200 XP / partie</strong><br>
                <br>
                <strong>Interdit au moins d’1m30</strong><br>
                <br>
                Une plongée épique dans l’univers des vikings et des
                chevaliers. Vous retrouverez l’ambiance du célèbre
                jeu For Honor du studio français Ubisoft.<br>
                Une attraction riche en sensations fortes déconseillée
                aux âmes sensibles.
            </p>
            <a class="more_infos" href="#">En savoir plus</a>
        </div>
    </div>

    <div class="backToTop">
        <a href="{{ route('attraction') }}"><img src="{{asset('images/backToTop.png')}}" alt=""></a>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>