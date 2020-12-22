<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <title>A propos</title>
</head>

<body>
    <div class="titlePropos">
        <h2>Qui sommes-nous ?</h2>
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
    @include('footer')

</body>

</html>