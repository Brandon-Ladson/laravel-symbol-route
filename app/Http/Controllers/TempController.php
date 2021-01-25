<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{

  // funzione per home
  public function tornaHome() {

    return view('pages.home');

  }

  // funzione per blog
  public function tornaBlog() {

    return view('pages.blog');

  }

  // funzione per blog
  public function tornaAbout() {

    return view('pages.about');
    
  }

}
