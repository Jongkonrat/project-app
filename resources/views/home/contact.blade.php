@extends('layouts.app-master')

@section('content')
<h1>Contact page</h1>
    <div class=" p-5 rounded">
        <table class="border-collapse border border-slate-500">
    <thead>
        <tr>
        <th>City</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Country</th>
        <th>PostalCode</th>
        </tr>
    </thead>
        @foreach($offices as $office)
            <tbody>
                <tr>
                <td>{{ $office->city }}</td>
                <td>{{ $office->phone }}</td>
                <td>{{ $office->addressLine1 }}</td>
                <td>{{ $office->country }}</td>
                <td>{{ $office->postalCode }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td {
            background-color: #FFEFD5;
            border: 1px solid white;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #FAC240;
            border: 1px solid white;
            text-align: left;
            padding: 8px;
        }
    </style>
    

@endsection
