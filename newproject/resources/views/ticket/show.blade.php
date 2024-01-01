@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tickets</h1>
@stop

@section('content')
    <style>
        a {
            color: white;
            /* Change color to desired value */
        }

        a:hover {
            color: white;
        }
    </style>
<button class='btn btn-success'><a href="{{Route('ticket.create')}}">Add ticket</a></button>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">city</th>
                <th scope="col">company</th>
                <th scope="col">date_start</th>
                <th scope="col">date_end</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->city->name }}</td>
                    <td>{{ $ticket->company->name }}</td>
                    <td>{{ $ticket->date_start }}</td>
                    <td>{{ $ticket->date_end }}</td>
                    <td><button type="button" class="btn btn-success"><a
                                href={{ Route('ticket.edit',['id' => $ticket->id]) }}>edit</a></button></td>
                    <td><button type="button" class="btn btn-danger"><a
                                href={{ Route('ticket.delete', ['id' => $ticket->id]) }}>delete</a></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop 