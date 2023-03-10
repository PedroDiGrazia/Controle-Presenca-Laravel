<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Curso;
use App\Models\Pessoa;
use Carbon\Carbon;
use DB;

class LoginController extends Controller
{
    public function login(){
        $cursos = Curso::find(1);
        return view('presenca')->with('cursos',$cursos);
    }

    public function loginpresenca(Request $request){
        $pessoas = Pessoa::all();

        foreach($pessoas as $pessoas)
        {
            if($request -> email == $pessoas -> email & Hash::check($request -> senha, $pessoas -> senha)){
                return redirect() -> route('pagina-presenca');    
            }
        }
        return redirect () -> route('curso-login');
    }

    public function cursologin(){
        $cursos = Curso::all();
        return view('welcome')->with('cursos', $cursos);
    }

    public function cadastro(){
        $cursos = Curso::all();
        return view('cadastro')->with('cursos', $cursos);
    }

    public function cadastrar(Request $request){
        $pessoas = new Pessoa();
        $cursos = Curso::all();
        $pessoas->email = $request->email;
        $pessoas->senha = $request->senha;
        $pessoas->senha = Hash::make($request->senha);
        $pessoas->curso = $request->curso;
        $pessoas->save();
        return view('welcome02')->with('cursos', $cursos);

    }

    
}
