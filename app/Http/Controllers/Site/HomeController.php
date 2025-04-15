<?php

namespace App\Http\Controllers\Site;

use App\Models\Partner;  // Asegure-se de que a classe Partner está sendo importada
use App\Models\Portfolio;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Recupera todos os parceiros
        $partners = Partner::all(); // Isso pega todos os parceiros
        return view('site.home.index', compact('partners'));
        // Carregar todos os portfólios
        $portfolios = Portfolio::all();  // Aqui estamos a pegar todos os portfólios

        // Passar a variável para a view
        return view('site.home.index', compact('portfolios'));

        
    }

    
}

