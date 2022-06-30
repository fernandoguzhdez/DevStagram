<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct() {
        //Antes de que se ejecute el index con el middleware revisamos que el usuario este autenticado
        $this->middleware('auth');
    }

    public function index(User $user) {
        return view('dashboard', [
            'user' => $user
        ]);
    }

    public function create() {
        return view('posts.create');
    }
}
