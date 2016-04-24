@extends('denunciaTemplate')

    @section('footer')
    
    {!! Form::open(array('action'=>'DenunciaControler@postEnviar'))!!}
    
    
    <p><h4> {{ Form::label('nomeL','Digite seu Nome:')}}
      {{ Form::text('nome','',array('id'=>'nome','class'=>'form-control')) }}
</p>
    <p><h4>{{Form::label('contactoL', 'Digite o email ou contacto')}}</h4></p>
    {{ Form::text('contacto','',array('id'=>'provincia','class'=>'form-control')) }}

    <p><h4>{{Form::label('denunciaL', 'Deixe nos uma sugestao para melhoria dos servicos de saude:')}}</h4></p>
    <p>{{ Form::textarea('denuncia','',array('id'=>'sugestao','class'=>'form-control')) }}</p>

</p>
    {{Form::submit('Enviar', array('class'=>'btn btn-default'))}}





    {!! Form::close() !!}
    @stop