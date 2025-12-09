<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Laravel\Prompts\text;

class TesteController extends Controller
{
    public function teste($p1, $p2)
    {
        // echo "Parâmetros recebidos: $p1 e $p2 <br> " . "a soma deles é : " . ($p1 + $p2); // . é o operador de concatenação em PHP

        // return view('site.teste', ['p1' => $p1, 'p2' => $p2]); //  array associativo através da view

        // return view('site.teste', compact('p1', 'p2')); // compact através da view

        return view('site.teste')->with('p1', $p1)->with('p2', $p2); // with através da view
    }
}
