@extends('layouts.app-master')

@section('content')
    <h1>Profile page</h1>
    $userid = auth()->user()->id;

    @foreach($users as $user)
        if($user -> id == $userid)
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
    @endforeach
@endsection