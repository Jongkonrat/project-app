@extends('layouts.app-master')

@section('content')
<h1>Contact page</h1>
    <div class="bg-light p-5 rounded">
        <table class="border-collapse border border-slate-500">
    <thead>
        <tr>
        <th class="border border-slate-600">City</th>
        <th class="border border-slate-600">Phone</th>
        <th class="border border-slate-600">Address</th>
        <th class="border border-slate-600">Country</th>
        <th class="border border-slate-600">PostalCode</th>
        </tr>
    </thead>
        @foreach($offices as $office)
            <tbody>
                <tr>
                <td class="border border-slate-700">{{ $office->city }}</td>
                <td class="border border-slate-700">{{ $office->phone }}</td>
                <td class="border border-slate-700">{{ $office->addressLine1 }}</td>
                <td class="border border-slate-700">{{ $office->country }}</td>
                <td class="border border-slate-700">{{ $office->postalCode }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
    

@endsection