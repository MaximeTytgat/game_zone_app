<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Accueil</title>
</head>

<body>
    <div class="poppy-header">
        <img src="{{asset('images/astrobot-header-home-text.png')}}" alt="">
    </div>
    <div class="pictureHome">
        <img src="{{asset('images/picture-home-girls.png')}}" alt="">
        <img class="center-picture-home" src="{{asset('images/picture-home-parc-sd.png')}}" alt="">
        <img src="{{asset('images/picture-parc.png')}}" alt="">
    </div>
    <h1>Bienvenue à GAME ZONE</h1>
    <div class="boxHomePicture">
        <img class="ext-box-picture-home" src="{{asset('images/picture-home-parc-sd.png')}}" alt="">
        <img class="center-box-picture-home" src="{{asset('images/astrobot-picture-round.png')}}" alt="">
        <img class="ext-box-picture-home" src="{{asset('images/picture-parc.png')}}" alt="">
    </div>
    <div class="containerHome">
        <div class="textDescription">
            <p>
                Pour tout te dire GAME ZONE est un tout nouveau concept
                de parc d’attraction !
                Mes chefs ont créés GEEK CYBERCENTER qui est un groupe
                possèdant plusieurs parc d’attractions dans le monde
                comme BATTLE KART VR, FORTNITE ADVENTURE et PUBG SURVIVOR.
                En septembre 2019, nous avons ouvert GAME ZONE et il
                est le premier parc d’attraction au monde
                entièrement dédié à l’univers des jeux-vidéo.
                Alors n’hésite pas à venir t’amuser avec nous !
            </p>
        </div>
        <div class="poppyPicture">
            <img src="{{asset('images/astrbotAllonger.png')}}" alt="">
        </div>
    </div>
    <h2>Nos effectifs</h2>
    <div class="boxEffectif">
        <div class="box-effectif-element">
            <p>9</p>
            <p>ATTRACTIONS</p>
        </div>
        <div class="box-effectif-element">
            <p>5</p>
            <p>RESTAURANTS</p>
        </div>

        <div class="box-effectif-element">
            <p>500K</p>
            <p>VISITEURS</p>
        </div>
        <div class="box-effectif-element">
            <p>9000</p>
            <p>HECTARES</p>
        </div>
    </div>
    <img class="poppyGameHome" src="" alt="">
    <div class="allGames">

        <img src="{{asset('images/championleagueRound.png')}}" alt="">
        <img src="{{asset('images/heroesRound.png')}}" alt="">
        <img src="{{asset('images/heroesTeamRound.png')}}" alt="">
    </div>
    <div class="allGames">
        <img src="{{asset('images/fighterRound.png')}}" alt="">
        <img src="{{asset('images/fighterTeamRound.png')}}" alt="">
        <img src="{{asset('images/championsRound.png')}}" alt="">
    </div>

    <div class="allGames">
        <img src="{{asset('images/gameCenterRound.png')}}" alt="">
        <img src="{{asset('images/battleKartRound.png')}}" alt="">
        <img src="{{asset('images/contagionRound.png')}}" alt="">
        <a href="{{ route('index') }}"><img class="backToTop" src="{{asset('images/backToTop.png')}}" alt=""></a>
        <script src="{{asset('js/script.js')}}"></script>
</body>

</html>