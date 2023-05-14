<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage () {
        return view('welcome');
        }

    public function chisiamo () {
            return view('chi-siamo');
        }

    public function contatti () {
            return view('contatti');
        }
}
