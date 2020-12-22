<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/map.css')}}">
    <title>Plan</title>
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
    <img class="imageHeader" src="images/pjv-2020-2-1000x288.jpg" alt="">

    <div class="bar"></div>
    <img class="poppyMap" src="{{asset('images/astrobot-header-map.png')}}" alt="">
    <div class="containerPlan">
        <div class="icon">
            <p>
                <ul class="iconPlan">
                    <li><img src="{{asset('images/iconPlanBlack.png')}}" alt="">Les restaurants</li>
                    <li><img src="{{asset('images/iconPlanYellow.png')}}" alt="">Les points photos</li>
                    <li><img src="{{asset('images/iconPlanBlue.png')}}" alt="">Les boutiques</li>
                    <li><img src="{{asset('images/iconPlanPink.png')}}" alt="">Les services</li>
                </ul>
            </p>
        </div>
        <div class="map">
            <img src="{{asset('images/plan-map.png')}}" alt="">
        </div>
    </div>
    <div class="googleMap">
        <h2>Nous localiser</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20004.286147440198!2d1.3526265972610165!3d44.03759391551441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ac0e68890dfe89%3A0x3977dfff07da5c40!2sGame%20Zone!5e0!3m2!1sfr!2sfr!4v1608116199489!5m2!1sfr!2sfr" width="50%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="backToTop">
        <img src="{{asset('images/backToTop.png')}" alt="">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    @include('footer')

</body>

</html>