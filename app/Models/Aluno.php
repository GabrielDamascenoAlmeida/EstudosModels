<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'sobrenome',
        'idade',
        'turma',

];

protected $table = 'alunos';
public function alunos()
{
    return $this->belongsTo(Aluno::class);
}

}
