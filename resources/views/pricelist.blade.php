<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/pricelist.css')}}">
    <title>Tarifs & Billeterie</title>
</head>

<body>
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
        @include('footer')

</body>

</html>