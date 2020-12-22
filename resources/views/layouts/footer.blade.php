<footer>
    <div class="flex justify-around text-white mb-8 mt-20 items-center">
        <p><a href="{{ route("index") }}">À propos du parc</a></p>
        <p><a href="{{ route("contact") }}">Nous contacter</a></p>
        <p><a href="{{ route("recruitment") }}">On recrute</a></p>
        <p><a href="{{ route("press") }}">Dans la presse</a></p>
        <p>Du lundi au jeudi : 9h-19h<br>
            Du vendredi au samedi : 9h-18h<br>
            Le dimanche : 9h – 18h</p>
    </div>
    <div class="OpenHours">

    </div>
    <div class="footerDown">
        <div class="reseaux">
            <a href="www.facebook.com">
                <img class="facebookPicture" src="{{ asset("images/fbLogo.png") }}" alt="facebook">
            </a>
            <a href="www.twitter.com">
                <img class="twitterPicture" src="{{ asset("images/twitterLogo.png") }}" alt="twitter">
            </a>
            <a href="www.instagram.com">
                <img class="instagramPicture" src="{{ asset("images/instaLogo.png") }}" alt="instagram">
            </a>
            <a href="www.youtube.com">
                <img class="youtubePicture" src="{{ asset("images/ytLogo.png") }}" alt="instagram">
            </a>
            <a href="www.gmail.com">
                <img class="mailPicture" src="{{ asset("images/mailLogo.png") }}" alt="mail">
            </a>
        </div>
        <div class="cgvMl">
            <p><a href="">Condition Générale de Vente</a></p>
            <p><a href="">Mentions légales</a></p>
        </div>
    </div>
</footer>
