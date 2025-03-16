<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        // Menampilkan view dashboard
        return view('dashboard');
    }
}
