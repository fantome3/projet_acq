<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdherantController extends Controller
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
    public function actif()
    {
        return view('container.membreAcif');
    }

    public function passif()
    {
        return view('container.membrePassif');
    }
}
