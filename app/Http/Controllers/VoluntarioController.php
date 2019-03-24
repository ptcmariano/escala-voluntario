<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voluntario;

class VoluntarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $voluntarios = Voluntario::all();
        return view('voluntario', ['voluntarios'=>$voluntarios]);
    }
}
