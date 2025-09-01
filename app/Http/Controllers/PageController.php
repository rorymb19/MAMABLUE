<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function Home() {
        return view('Home');
    }

    public function Ella() {
        return view('Ella');
    }

    public function Sandy() {
        return view('Sandy');
    }

    public function Rory() {
        return view('Rory');
    }
}
