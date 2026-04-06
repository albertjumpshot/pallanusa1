<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $lawyers = Lawyer::all();
        return view('team', compact('lawyers'));
    }
}