<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $client;
    public function __construct(Client $client)
    {
        $this->middleware('auth');
        $this->client = $client;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clients = $this->client->orderby('id', 'desc')->paginate(30);
        return view('panel.admin.pages.clients.index', compact('clients'));
    }
}
