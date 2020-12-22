<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/pricelist.css')}}">
    <title>Tarifs & Billeterie</title>
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
    <img class="astrobot-header" src="{{asset('images/astrobot-header-visited.png')}}" alt="">
    <div class="container">
        <div class="containeBox">
            <div class="firstBox">
                <div class="passFighterJunior">
                    <div class="boxYellow">
                        <p>Pass Fighter Junior</p><br>
                        <p>0 - 2 ans</p>
                    </div>
                    <p>La journée: Gratuit</p><br>
                    <button class="reserve">Réserver</button>
                </div>
                <div class="passFighter">
                    <div class="boxPink">
                        <p>Pass Fighter</p><br>
                        <p>2 - 8 ans</p>
                    </div>
                    <p>La journée: 12.50€</p><br>
                    <button class="reserve">Réserver</button>
                </div>
            </div>

            <div class="secondBox">
                <div class="passSuperFighter">
                    <div class="boxViolet">
                        <p>Pass Super Fighter</p><br>
                        <p>+ 8 ans</p>
                    </div>
                    <p>La journée: 13.50€</p>
                    <button class="reserve">Réserver</button>
                </div>
                <div class="passHeroes">
                    <div class="boxBlue">
                        <p>Pass Heroes</p><br>
                        <p>Adulte</p>
                    </div>
                    <p>La journée: 15€</p>
                    <button class="reserve">Réserver</button>
                </div>
            </div>
        </div>


        <div class="table">
            <table>
                <tr>
                    <td><strong>Mes billets</strong> </td>
                    <td><strong>Quantité</strong></td>
                    <td><strong>Total</strong></td>
                </tr>
                <tr>
                    <td>Pass Fighter Junior </td>
                    <td>2
                        <input class="moins" type="button" value="-">
                        <input class="plus" type="button" value="+">

                    </td>
                    <td>0.00€</td>
                </tr>
                <tr>
                    <td>Pass Fighter</td>
                    <td>1
                        <input class="moins" type="button" value="-">
                        <input class="plus" type="button" value="+">
                    </td>
                    <td>12.50€</td>
                </tr>
                <tr>
                    <td>Pass Super Fighter </td>
                    <td>1
                        <input class="moins" type="button" value="-">
                        <input class="plus" type="button" value="+">
                    </td>
                    <td>13.50€</td>
                </tr>
                <tr>
                    <td>Pass heroes</td>
                    <td>2
                        <input class="moins" type="button" value="-">
                        <input class="plus" type="button" value="+">
                    </td>
                    <td>15.00€</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>56.00€</td>
                </tr>
            </table>
            <div class="command-date">
                <a href="{{asset('calendar')}}"></a><button class="date">Voir les dates disponibles</button></a>
                <button class="command">Passer la commande</button>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>