@extends('layouts.master')

@section('title','Editar Pessoa')

@section('content')
    <h3>Editar Pessoa</h3>
    <div class="row text-center">
        <div class="col-md-6 text-left">
         {!! Form::model($person,['url'=>'edit/person/']) !!}
            @include('person.form')
            <button class="btn btn-success">Cadastrar</button>
        </div>
        <div class="col-md-3">
        </div>
        {!! Form::close() !!}
    </div>
@stop