<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/pricelist.css')}}">
    <title>Rates and Ticketing</title>
</head>

<body>
    <img class="astrobot-header" src="{{asset('images/astrobot-header-visited.png')}}" alt="">
    <div class="container">
        <div class="containeBox">
            <div class="firstBox">
                <div class="passFighterJunior">
                    <div class="boxYellow">
                        <p>Junior Fighter Pass</p><br>
                        <p>0 - 2 y/o</p>
                    </div>
                    <p>1 - Day: Free</p><br>
                    <button class="reserve">Buy</button>
                </div>
                <div class="passFighter">
                    <div class="boxPink">
                        <p>Fighter Pass</p><br>
                        <p>2 - 8 y/o</p>
                    </div>
                    <p>1 - Day: 12.50€</p><br>
                    <button class="reserve">Buy</button>
                </div>
            </div>

            <div class="secondBox">
                <div class="passSuperFighter">
                    <div class="boxViolet">
                        <p>Super Fighter Pass</p><br>
                        <p>+ 8 y/o</p>
                    </div>
                    <p>1 - Day: 13.50€</p>
                    <button class="reserve">Buy</button>
                </div>
                <div class="passHeroes">
                    <div class="boxBlue">
                        <p>Heroes Pass</p><br>
                        <p>Adult</p>
                    </div>
                    <p>1 - Day: 15€</p>
                    <button class="reserve">Buy</button>
                </div>
            </div>
        </div>


        <div class="table">
            <table>
                <tr>
                    <td><strong>My tickets</strong> </td>
                    <td><strong>Quantity</strong></td>
                    <td><strong>Total</strong></td>
                </tr>
                <tr>
                    <td>Junior Fighter Pass</td>
                    <td>2
                        <input class="moins" type="button" value="-">
                        <input class="plus" type="button" value="+">

                    </td>
                    <td>0.00€</td>
                </tr>
                <tr>
                    <td>Fighter Pass</td>
                    <td>1
                        <input class="moins" type="button" value="-">
                        <input class="plus" type="button" value="+">
                    </td>
                    <td>12.50€</td>
                </tr>
                <tr>
                    <td>Super Fighter Pass</td>
                    <td>1
                        <input class="moins" type="button" value="-">
                        <input class="plus" type="button" value="+">
                    </td>
                    <td>13.50€</td>
                </tr>
                <tr>
                    <td>Heroes Pass</td>
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
                <a href="{{asset('calendar')}}"><button class="date">See available dates</button></a>
                <button class="command">Place the order</button>
            </div>
        </div>
</body>

</html>