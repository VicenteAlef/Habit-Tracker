<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function index() {
    $name = "João";
    $habits = ["Ler", "Estudar", "Jogar"];
    return view('home', [
        'name' => $name,
        "habits" => $habits
      ]);
  }
}