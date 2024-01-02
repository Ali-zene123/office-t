@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add Ticket</h1>
@stop

@section('content')

    <form method='post' action={{ Route('ticket.store') }}>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <select class="form-select" aria-label="Default select example" name ="city_id">
                  <option selected > City </option>
                  @foreach ($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <select class="form-select" aria-label="Default select example" name="company_id">
                <option selected> Company </option>
                  @foreach ($companies as $company)
                        <option value="{{$company->id}}" >{{$company->name}}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4"> date start </label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="date start" name='date_start'>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4"> date end </label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="date end" name='date_end'>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add-ticket</button>
    </form>
@stop
@section('css')
    
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop