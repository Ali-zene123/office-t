@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Company</h1>
@stop

@section('content')
    <form method='post' action={{ Route('company.update', ['id' => $company->id]) }}>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Company Name </label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Name Company" value={{ $company->name }}
                    name='name'>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Company Phone</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Phone Number"
                    value={{ $company->phone }} name='phone'>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">update-company</button>
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