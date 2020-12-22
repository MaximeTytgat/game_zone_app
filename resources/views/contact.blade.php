<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <title>Contact</title>
</head>

<body>
    <div id="boite" class="blueBox">
        <form class="col-6 col-10-sm mx-auto">
            <div class="col-6 mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="name" class="form-control" id="nameInput" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="col-6 mb-3">
                <label for="exampleInputPassword1" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="mailInput">
            </div>
            <div class="col-6 mb-3">
                <label for="exampleInputPassword1" class="form-label">Objet</label>
                <input type="name" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
            <div class="mb-3  form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">J’accepte les <a href="{{asset('cgv')}}">Conditions de
                        vente
                        et conditions générales d’utilisation</a></label>
            </div>
            <button type="submit" id="submitContact" class="btn btn-primary">Envoyer</button>

        </form>
    </div>
    <div class="col-5 mt-5 mb-4 mx-auto">
        <h2>Ou encore sur nos résaux sociaux</h2>
    </div>
    <div class="col-8 mx-auto mt-3 d-flex wrap justify-content-around">
        <img class="m-2" src="{{asset('images/youtubeLogo.png')}}" alt="Logo youtube">
        <img class="m-2" src="{{asset('images/insta.png')}}" alt="Logo instagram">
        <img class="m-2" src="{{asset('images/twitterLogo.png')}}" alt="Logo twitter">
        <img class="m-2" src="{{asset('images/facebook.png')}}" alt="Logo facebook">
    </div>
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>