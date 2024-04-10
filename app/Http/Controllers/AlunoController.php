<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    //
    public function Alunos(){
        $alunos = Aluno::all();

        return view('DadosAlunos', ['alunos'=>$alunos]);

    }
}
