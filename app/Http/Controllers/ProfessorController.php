<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{
    //
    public function Professor(){
        $professores = Professor::all();
        // dd($prof);

        return view('DadosProfessores', ['professores'=>$professores]);
    }
}
