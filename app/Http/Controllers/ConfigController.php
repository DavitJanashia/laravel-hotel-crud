<?php

namespace App\Http\Controllers;

use App\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
  public function index() {
    $config = Config::all();

    return view('config-index', compact('config'));
  }

  public function show($id) {
    $config = Config::findOrFail($id);



    return view('configurazione', compact('config'));
  }

  public function create() {
    return view('create-configurazione');
  }

  public function store(Request $request) {
    $data = $request -> all();
    $config = Config::create($data);


    return redirect() -> route('configIndex');

  }

}
