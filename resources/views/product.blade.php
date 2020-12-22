<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-shirt Salamèche</title>
</head>

<body>
    <div id="containerProduit" class="container col-12 mt-5 d-flex justify-content-between">
        <div class="">
            <img id="photoProduit" src="{{asset('images/salameche.png')}}" alt="t-shirt salamèche">
        </div>
        <div class="m-5 mt-5">
            <h2>T-shirt Salamèche</h2><br>
            <p>Taille</p>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Choisir la taille</option>
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
            </select><br>
            <p>Quantité</p>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Choisir la quantité</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            <button type="button" id="cartButton" class="btn mt-5">Ajouter au panier</button>
        </div>
    </div>
    <p class="col-8 mx-auto"><strong>Description</strong> : Ce nouveau t-shirt premium Pokémon est superbe, avec la fiche de Salamèche sur la face avant. C'est un modèle officiel de belle qualité avec un style très original, un rappel de la couleur de Salamèche sur le col et l'arrière du t-shirt, à ne pas manquer !

        100% coton 
        </p>
        @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>

</html>