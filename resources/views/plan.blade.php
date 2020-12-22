<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/map.css')}}">
    <title>Plan</title>
</head>

<body>
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
</body>

</html>