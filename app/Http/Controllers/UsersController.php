<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $usuarios = Users::all();
        return view('usuarios.index', compact('usuarios'));
    }
}

