<?php

namespace App\Http\Controllers;

use App\Ospite;
use Illuminate\Http\Request;

class ospiteController extends Controller
{

    public function index() {
      $ospiti = Ospite::all();
      return view('home', compact('ospiti'));
    }
}
