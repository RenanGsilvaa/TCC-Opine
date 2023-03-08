@extends('layouts.main')

@section('content')
@foreach($users as $user)
    <h1>{{$user -> nome}}</h1>
    <h2>{{$user -> cpf}}</h2>
@endforeach
@endsection