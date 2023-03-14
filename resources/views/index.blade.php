@extends('layouts.main')

@section('content')
@foreach($users as $user)
    <label>Nome: </label> <br>
    <h1>{{$user -> nome}}</h1>
    <label>Senha: </label> <br>
    <h2>{{$user -> senha}}</h2>
    <label >Cpf: </label> <br>
    <h2>{{$user -> cpf}}</h2>
@endforeach
@endsection