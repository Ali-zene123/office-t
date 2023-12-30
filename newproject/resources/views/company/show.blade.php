@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Companies</h1>
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
<button class='btn btn-success'><a href="{{Route('company.create')}}">Add Company</a></button>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->phone }}</td>
                    <td><button type="button" class="btn btn-success"><a
                                href={{ Route('company.edit',['id' => $company->id]) }}>edit</a></button></td>
                    <td><button type="button" class="btn btn-danger"><a
                                href={{ Route('company.delete', ['id' => $company->id]) }}>delete</a></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop 