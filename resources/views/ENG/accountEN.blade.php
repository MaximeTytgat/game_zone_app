<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
    <title>Log in</title>
</head>
<body>
        <img class="picture" src="{{asset('images/astrobotAccount.png')}}" alt="astro_bot">
        <div class="containerWhite">
            <form action="/connexion" method="post">
                <div>
                    <label for="name">User :</label>
                    <input type="text" id="name" name="user_name">
                </div>
                <div>
                    <label for="mail">Password:</label>
                    <input type="email" id="mail" name="user_mail">
                </div>
                <p>You don't have an account yet ?<a href="">Sign in</a> </p>
                <div class="button">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="containerBlue">
            <h2>Sign in</h2>
            <form action="/inscription" method="post">
                <div>
                    <label class="labelSubscribe" for="name">First name :</label>
                    <input class="inputSubscribe" type="text" id="surname" name="user_surname">
                </div>
                <div>
                    <label class="labelSubscribe" for="name">Last name :</label>
                    <input class="inputSubscribe" type="text" id="name" name="user_name">
                </div>
                <div>
                    <label class="labelSubscribe" for="country">City :</label>
                    <input class="inputSubscribe" type="text" id="country" name="user_country">
                </div>
                <div>
                    <label class="labelSubscribe" for="name">Nickname :</label>
                    <input class="inputSubscribe" type="text" id="pseudo" name="user_pseudo">
                </div>
                <div>
                    <label class="labelSubscribe" for="mail">Password :</label>
                    <input class="inputSubscribe" type="password" id="password" name="password">
                </div>
                <div>
                    <label class="labelSubscribe" for="mail">Password :</label>
                    <input class="inputSubscribe" type="password" id="password" name="password">
                </div>
                <div class="rgpd">
                    <input class="checkboxInput" type="checkbox" id="scales" name="scales"
                           checked>
                    <label for="scales">I agree with the condition of us.</label>
                  </div>
                <div class="button">
                    <button class="buttonSubscribe" type="submit">Submit</button>
                </div>
            </form>
            <div class="avatar">
              <button class="buttonSnake"><img src="{{asset('images/gaming_snake 1.png')}}" alt=""></button> 
              <button class="buttonBird"><img class="bird" src="{{asset('images/gaming-bird 1.png')}}" alt=""></button>
              <button class="buttonWolf"><img src="{{asset('images/gaming-wolf 1.png')}}" alt=""></button>
              <button class="buttonPirate"><img src="{{asset('images/gaming-pirate 1.png')}}" alt=""></button>
            </div>
        </div>
        <p class="xp">How to collect XP ?</p>
        <!-- footer -->
    <img class="backToTop" src="{{asset('images/backToTop.png')}}" alt="back_to_top">
</body>
</html>
