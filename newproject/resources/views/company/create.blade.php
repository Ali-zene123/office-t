@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add Company</h1>
@stop

@section('content')
    <form method='post' action={{ Route('company.store') }}>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Company Name </label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Name Company" 
                 name='name'>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Company Phone</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Phone Number"
                 name='phone'>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add-company</button>
    </form>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop