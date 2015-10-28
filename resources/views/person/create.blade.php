@extends('layouts.master')

@section('title','Criar Pessoa')

@section('content')
    <h3>Criar Pessoa</h3>
    <div class="row text-center">
        <div class="col-md-6 text-left">
            {!! Form::open(['url'=>'create/person/']) !!}
            @include('person.form')
            <button class="btn btn-success">Cadastrar</button>
        </div>
        <div class="col-md-3">
        </div>
        {!! Form::close() !!}
    </div>
@stop