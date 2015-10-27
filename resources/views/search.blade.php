@extends('layouts.master')

@section('title','')

@section('content')
    <div class="row text-center">
        <h3>Resultados da Pesquisa:</h3>
        @foreach($pessoas as $pessoa)
            <div class="col-md-6 col-sm-12">
                @include('includes.contato')
            </div>
        @endforeach
    </div>
@stop