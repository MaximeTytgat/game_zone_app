<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function parc() {
        return view('parc');
    }

    public function attraction() {
        return view('attraction');
    }

    public function plan() {
        return view('plan');
    }

    public function itinerary() {
        return view('itinerary');
    }

    public function pricelist() {
        return view('pricelist');
    }

    public function calendar() {
        return view('calendar');
    }

    public function game() {
        return view('game');
    }

    public function info() {
        return view('info');
    }

    public function about() {
        return view('about');
    }

    public function press() {
        return view('press');
    }

    public function recruitment() {
        return view('recruitment');
    }

    public function contact() {
        return view('contact');
    }

    public function cgv() {
        return view('cgv');
    }

    public function cgu() {
        return view('cgu');
    }

    public function shop() {
        return view('shop');
    }

    public function account() {
        return view('account');
    }

    public function admin() {
        return view('admin');
    }

    public function legalnotice() {
        return view('legalnotice');
    }
    public function product() {
        return view('product');
    }
    public function footer() {
        return view('footer');
    }
}
