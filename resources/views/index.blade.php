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
    <header>
        <nav>
          <a class="logo link" href="{{ route('index') }}"><img class="logo" src="{{asset('images/logo.png')}}" /></a>
          <a class="link" href="{{ route('parc') }}"><span>Le parc</span></a>
          <a class="link" href="{{ route('attraction') }}">Les attractions</a>
          <a class="link" href="{{ route('plan') }}">Le plan</a>
          <div class="link menu-wrapper">
            Preparer ma visite
            <div class="dropdown">
              <a class="menu-item link" href="{{ route('plan') }}">Se rendre au parc</a>  
              <a class="menu-item link" href="{{ route('pricelist') }}">Tarif et Billeterie</a>  
              <a class="menu-item link" href="{{ route('timetablecalendar') }}">Horaires et calendrier</a> 
            </div>
          </div>
          <a class="link" href="{{ route('shop') }}">Boutique</a>
          <a class="link" href="{{ route('game') }}">My game</a>
          <a class="link" href="{{ route('info') }}">Info</a>   
          <div class="account-wrapper">
            <div class="languages">
                <a href="#"><img src="{{asset('images/france.png')}}" alt="france" /></a><br>
                <a href="#"><img src="{{asset('images/england.png')}}" alt="uk" /></a><br>
                <a href="#"><img src="{{asset('images/spain.png')}}" alt="spain" /></a>
              </div>
            <a href="#"><p><strong>Brian mtr</strong></p></a>
            <a class="personal-info link" href="#">
              <img class="avatar" src="{{asset('images/gaming_snake.png')}}" alt="avatar" />
            </a>

            <a class="hamburger" href="#"><img src="{{asset('images/hamburger.png')}}" alt="hamburger" /></a>
          </div>
      
          <!-- nav mobile -->
          <div class="content-mobile">
            <li>
              <a class="link-mobile" href="{{ route('parc') }}">Le parc</a><br>
            </li>
            <li>
              <a class="link-mobile" href="{{ route('attraction') }}">Les attractions</a><br>
            </li>
            <li>
              <a class="link-mobile" href="{{ route('plan') }}">Le plan</a><br>
            </li>
            <li>
              <a class="link-mobile" href="{{ route('plan') }}">Se rendre au parc</a>  <br>
            </li>
            <li>
              <a class="link-mobile" href="{{ route('pricelist') }}">Tarif et Billeterie</a>  <br>
            </li>
            <li>
              <a class="link-mobile" href="{{ route('timetablecalendar') }}">Horaires et calendrier</a> <br>
            </li>
            <li>
              <a class="link-mobile" href="{{ route('shop') }}">Boutique</a><br>
            </li>
            <li>
              <a class="link-mobile" href="{{ route('game') }}">My game</a><br>
            </li>
            <li>
              <a class="link-mobile" href="{{ route('info') }}">Info</a>
            </li>
          </div>   
        </nav>
      </header> 
    <div class="poppy-header">
        <img src="{{asset('images/astrobot-header-home-text.png')}}" alt="">
    </div>
    <div class="bar"></div>
    <div class="pictureHome">
        <img src="{{asset('images/image/picture-home-girls.png')}}" alt="">
        <img class="center-picture-home" src= "{{asset('images/picture-home-parc-sd.png')}}" alt="">
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
    <footer>
        <div class="firstBoxFooter">
            <p><a href="{{ route('about') }}">À propos du parc</a></p>
            <p><a href="{{ route('contact') }}">Nous contacter</a></p>
            <p><a href="{{ route('recruitment') }}">On recrute</a></p>
            <p><a href="{{ route('press') }}">Dans la presse</a></p>
        </div>
        <div class="OpenHours">
            <p>Du lundi au jeudi : 9h-19h<br>
                Du vendredi au samedi : 9h-18h<br>
                Le dimanche : 9h – 18h</p>
        </div>
        <div class="footerDown">
            <div class="reseaux">
                <img class="facebookPicture" src="{{asset('images/Facebook.png')}}" alt="facebook">
                <img class="twitterPicture" src="{{asset('images/Twitter.png')}}" alt="twitter">
                <img class="instagramPicture" src="{{asset('images/Instagram.png')}}" alt="instagram">
                <img class="youtubePicture" src="{{asset('images/YouTube.png')}}" alt="instagram">
                <img class="mailPicture" src="{{asset('images/mail.png')}}" alt="mail">
            </div>
            <div class="cgvMl">
                <p><a href="{{ route('cgv') }}"> Condition Générale de Vente</p></a>
                <p><a href="{{ route('legalnotice') }}"> Mentions légales</p></a>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>