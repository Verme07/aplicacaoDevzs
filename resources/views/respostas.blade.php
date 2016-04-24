@extends('templateQuestionario')
	@section('content')
	<p><h1>Respostas</h1></p>
	<table class="table-bordered table-striped table-condensed cf">
		<tr>
			<th>Nome</th>
			<th>Provincia</th>
			<th>Bairro</th>
			<th>Doencas Frequentes</th>
			<th>Atendimento</th>
			<th>Prioridade</th>
			<th>Tempo de espera</th>
			<th>Suborno</th>
			<th>Sobre o Questionario</th>
			<th>Sugestoes</th>
		</tr>
		@foreach($questionario as $questionario)
		<tr>
			<td>{{$questionario->nome}}</td>
			<td>{{$questionario->provincia}}</td>
			<td>{{$questionario->bairro}}</td>
			<td>{{$questionario->doencas}}</td>
			<td>{{$questionario->atendimento}}</td>
			<td>{{$questionario->prioridade}}</td>
			<td>{{$questionario->tempoEspera}}</td>
			<td>{{$questionario->suborno}}</td>
			<td>{{$questionario->utilidade}}</td>
			<td>{{$questionario->sugestao}}</td>
		</tr>
		@endforeach
	</table>
	@stop