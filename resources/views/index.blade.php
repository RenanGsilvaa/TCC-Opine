@extends('layouts.main')

@section('content')
@forech($users as $user)
    <h1>{{$user -> name}}</h1>
    <h2>{{$user -> cpf}}</h2>
@endforech
@endsection