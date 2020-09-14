<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */ 
    // middleware è una funzione che accetta stringhe e controlla che l'accesso a questo controller sia
    // consentito solo agli utenti loggati

    // scrivere questo nel controller vuol dire che a questo possono accedere soltanto gli utenti autenticati

    // se levo questa funzione sottostante alla pagina /home accederanno tutti anche gli utenti non loggati.
    // quindi è questa funzione qui sotto che mi crea l'area riservata

    // qui vado per controller intero e non per singola route
    public function __construct()
    {   
        $this->middleware('auth');
    }   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        return view('home');
    }
}
