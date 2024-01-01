@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ticket</h1>
@stop

@section('content')
    <form method='post' action={{ Route('ticket.update', ['id' => $ticket->id]) }}>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity4"> City </label>
            <select class="form-select" aria-label="Default select example" name ="city_id">
              <option selected value="{{$ticket->city->id}}"> {{$ticket->city->name}} </option>
              @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
              @endforeach
            </select>
            </div>
            <div class="form-group col-md-6">
            <label for="inputCompany4"> Company </label>
            <select class="form-select" aria-label="Default select example" name="company_id">
            <option selected value="{{$ticket->company->id}}"> {{$ticket->company->name}} </option>
              @foreach($companies as $company)
                    <option value="{{$company->id}}" >{{$company->name}}</option>
              @endforeach
            </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputdate4"> date start </label>
                <input type="text" class="form-control"  placeholder="date start" value='{{$ticket->date_start}}'
                    name='date_start'>
            </div>
            <div class="form-group col-md-6">
                <label for="inputDate4"> date end </label>
                <input type="text" class="form-control"  placeholder="date end"
                    value='{{ $ticket->date_end }}' name='date_end'>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">update-ticket</button>
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