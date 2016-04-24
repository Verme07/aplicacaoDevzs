@extends('home')

    @section('content')
    
    {!! Form::open(array('action'=>'FormularioControler@postEnviar'))!!}
    
    
    <p><h4> {{ Form::label('nomeL','Digite seu Nome:')}}
      {{ Form::text('nome','',array('id'=>'nome','class'=>'form-control')) }}
</p>
    <p><h4>{{Form::label('provinciaL', 'Digite o nome da sua provincía:')}}</h4></p>
    {{ Form::text('provincia','',array('id'=>'provincia','class'=>'form-control')) }}
</p>
    <p><h4>{{Form::label('bairroL', 'Digite nome do seu bairro:')}}</h4></p>
      {{ Form::text('bairro','',array('id'=>'bairro','class'=>'form-control')) }}
</p>
     <p><h4>{{Form::label('doencasL', 'Quais as doenças mais frequentes te levam a procurar os serviços de saúde?')}}</h4></p>
      {{ Form::text('doencas','',array('id'=>'doencas','class'=>'form-control')) }}
 </p>
    <p><h4>{{Form::label('atendimentoL', 'Quantas vezes foi bem atendido (a) num hospital ou centro de saúde?')}}</h4></p>
    <p>{{Form::radio('atendimento', 'Uma vez')}}      {{Form::label('Uma vez')}}</p>
    <p>{{Form::radio('atendimento', 'Duas vezes')}}    {{Form::label('Duas vezes')}}</p>
    <p>{{Form::radio('atendimento', 'Varias vezes')}}    {{Form::label('Varias Vezes')}}</p>
    <p>{{Form::radio('atendimento', 'Nunca')}}    {{Form::label('Nunca')}}</p>
</p>
    <p><h4>{{Form::label('prioridadeL', 'Acha que a prioridade das doenças e valorizada nos hospitais?')}}</h4></p>
    <p>{{Form::radio('prioridade', 'Sim')}}      {{Form::label('Sim')}}</p>
    <p>{{Form::radio('prioridade', 'Talvez')}}    {{Form::label('Talvez')}}</p>
    <p>{{Form::radio('prioridade', 'Raramente')}}    {{Form::label('Raramente')}}</p>
    <p>{{Form::radio('prioridade', 'Nao')}}    {{Form::label('Não')}}</p>
</p>
    <p><h4>{{Form::label('tempoEsperaL', 'Quanto tempo tolera ficar na fila de espera de um hospital?')}}</h4></p>
    <p>{{Form::radio('tempoEspera', 'Menos de 1 hora')}}      {{Form::label('Menos de 1 hora')}}</p>
    <p>{{Form::radio('tempoEspera', 'Mais de 1 hora')}}    {{Form::label('Mais de 1 hora')}}</p>
    <p>{{Form::radio('tempoEspera', 'Mais de 3 horas')}}    {{Form::label('Mais de 3 hora')}}</p>
    <p>{{Form::radio('tempoEspera', 'Quanto tempo for necessario')}}    {{Form::label('Quanto tempo for necessario')}}</p>
</p>
    <p><h4>{{Form::label('subornoL', 'Subornaria um funcionário dos serviços de saúde para ser atendido?')}}</h4></p>
    <p>{{Form::radio('suborno', 'Sim')}}      {{Form::label('Sim')}}</p>
    <p>{{Form::radio('suborno', 'Nunca')}}    {{Form::label('Nunca')}}</p>
    <p>{{Form::radio('suborno', 'Dependendo da urgencia')}}    {{Form::label('Dependendo da urgencia')}}</p>
    <p>{{Form::radio('suborno', 'Nao sei')}}    {{Form::label('Não sei')}}</p>
</p>
    <p><h4>{{Form::label('utilidadeL', 'Achou útil esse questionário?')}}</h4></p>
    <p>{{Form::radio('utilidade', 'Sim')}}      {{Form::label('Sim')}}</p>
    <p>{{Form::radio('utilidade', 'Nao')}}    {{Form::label('Não')}}</p>
    <p>{{Form::radio('utilidade', 'Talvez')}}    {{Form::label('Talvez')}}</p>
    </p>
    <p><h4>{{Form::label('sugestao', 'Deixe nos uma sugestao para melhoria dos servicos de saude:')}}</h4></p>
    <p>{{ Form::textarea('sugestao','',array('id'=>'sugestao','class'=>'form-control')) }}</p>

</p>
    {{Form::submit('Enviar', array('class'=>'btn btn-default'))}}





    {!! Form::close() !!}
    @stop