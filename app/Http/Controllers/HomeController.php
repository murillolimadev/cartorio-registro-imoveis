<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Indice\Indice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $indice;
    public function __construct(Indice $indice)
    {
        $this->middleware('auth');
        $this->indice = $indice;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('panel.admin.pages.index');
    }
}
