<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Curso;
use DB;

class LoginController extends Controller
{
    public function login(){
        return view('presenca');
    }

    public function cursologin(){
        $cursos = Curso::all();
        return view('welcome')->with('cursos', $cursos);
    }

    public function cadastro(){
        $cursos = Curso::all();
        return view('cadastro')->with('cursos', $cursos);
    }
}
