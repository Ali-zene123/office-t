@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Error</h1>
@stop

@section('content')

    <form method='post' action='{{redirect()->back()}}'>
        @csrf
        
        @foreach($errors as $key=>$error)
            @foreach($error as $val)
            <div>
               {{$val}}<br>
            </div>
            @endforeach
        @endforeach
    </form>
@stop
@section('css')
    
@stop

@section('js')
    
@stop