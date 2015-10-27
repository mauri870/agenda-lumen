@extends('layouts.master')

@section('title','')

@section('content')
    <div class="row text-center">
        @foreach($pessoas as $pessoa)
            <div class="col-md-6 col-sm-12">
                @include('includes.contato')
            </div>
        @endforeach
    </div>
@stop