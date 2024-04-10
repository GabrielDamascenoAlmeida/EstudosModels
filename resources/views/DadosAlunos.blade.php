<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
<h1>
    Welcome!
</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Idade</th>
      <th scope="col">Turma</th>
    </tr>
  </thead>
  <tbody>
@foreach ($alunos as $aluno)
    <tr>
      <th scope="row">{{$aluno->nome}}</th>
      <th scope="row">{{$aluno->sobrenome}}</th>
      <th scope="row">{{$aluno->idade}}</th>
      <th scope="row">{{$aluno->turma}}</th>
    </tr>
@endforeach
  </tbody>
</table>
