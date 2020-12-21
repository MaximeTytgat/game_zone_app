<header>
    <nav>
        <div class="flex justify-between items-center w-full">
            <a class="logo link" href="#"><img class="logo" src="{{ asset("images/logo.png") }}" /></a>
            <div class="flex w-4/5 justify-around">
                <a class="link" href="index.html">Le parc</a>
                <a class="link" href="attraction.html">Les attractions</a>
                <a class="link" href="map.html">Le plan</a>
                <div class="link menu-wrapper">
                    Preparer ma visite

                    <div class="dropdown">
                        <a class="menu-item link" href="map.html">Se rendre au parc</a>
                        <a class="menu-item link" href="#">Tarif et Billeterie</a>
                        <a class="menu-item link" href="calendar.html">Horaires et calendrier</a>
                    </div>
                </div>
                <a class="link" href="shop/boutique.html">Boutique</a>
                <a class="link" href="game.html">My game</a>
                <a class="link" href="information.html"><span>Info</span></a>
            </div>
        </div>
        <h1><i class=" fa fa-shopping-cart"></i></h1>
        <div class="account-wrapper">

            <div class="languages">
                <a href="#"><img src="{{ asset("images/france.jpg") }}" alt="france" /></a><br>
                <a href="#"><img src="{{ asset("images/england.png") }}" alt="uk" /></a><br>
                <a href="#"><img src="{{ asset("images/spain.jpg") }}" alt="spain" /></a>
            </div>

            <x-dropdown class="" align="right" width="48">
                <x-slot name="trigger">
                    <button class="ml-8 flex items-center text-sm font-medium  hover:text-gray-300 hover:border-gray-300 focus:outline-none focus:text-gray-300 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div style="display: flex; align-items: center; justify-content: flex-end">{{ Auth::user()->username }} <img style="width: 100px" src="{{ asset(Auth::user()->profile_icon) }}" alt=""></div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <!-- Authentication -->
                    <form action="{{ route('User.show', ['User' => Auth::user()->id]) }}">
                        <x-dropdown-link onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Mon compte') }}
                        </x-dropdown-link>
                    </form>
                    <!-- Admin Dropdown -->
                    @if(Auth::user()->is_admin)
                        <x-dropdown-link :href="route('dashboard')">
                            Modifier les infos
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('Attraction.index')">
                            Modifier les Attractions
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('dashboard')">
                            Modifier les horaires
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('User.index')">
                            Modifier les Utilisateurs
                        </x-dropdown-link>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            Déconnexion
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>

            <a class="hamburger" href="#"><img src="{{ asset("images/hamburger.png") }}" alt="hamburger" /></a>
        </div>

        <!-- nav mobile -->
        <div class="content-mobile">
            <li>
                <a class="link-mobile" href="index.html">Le parc</a><br>
            </li>
            <li>
                <a class="link-mobile" href="attraction.html">Les attractions</a><br>
            </li>
            <li>
                <a class="link-mobile" href="map.html">Le plan</a><br>
            </li>
            <li>
                <a class="link-mobile" href="map.html">Se rendre au parc</a>  <br>
            </li>
            <li>
                <a class="link-mobile" href="#">Tarif et Billeterie</a>  <br>
            </li>
            <li>
                <a class="link-mobile" href="calendar.html">Horaires et calendrier</a> <br>
            </li>
            <li>
                <a class="link-mobile" href="#">Boutique</a><br>
            </li>
            <li>
                <a class="link-mobile" href="game.html"> My game</a><br>
            </li>
            <li>
                <a class="link-mobile" href="information.html"><span>Info</span></a>
            </li>
        </div>
    </nav>
</header>







@if (session('status'))
    <div class="w-full py-3 bg-green-300 font-bold text-white text-center">
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    </div>
@endif
