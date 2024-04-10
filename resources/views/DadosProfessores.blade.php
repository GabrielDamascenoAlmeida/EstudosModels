<div>
    <!-- He who is contented is rich. - Laozi -->
</div>
<h1>
    Welcome teacher!
</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Idade</th>
      <th scope="col">Matéria</th>
    </tr>
  </thead>
  <tbody>
@foreach ($professores as $prof)
    <tr>
      <th scope="row">{{$prof->nome}}</th>
      <th scope="row">{{$prof->sobrenome}}</th>
      <th scope="row">{{$prof->idade}}</th>
      <th scope="row">{{$prof->materia}}</th>
    </tr>
@endforeach
  </tbody>
</table>
