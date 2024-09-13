
@extends('layouts.app')

@section('body')
    <h1>USER: {{ $user->name }}</h1>
    <p>EMAIL: {{ $user->email }}</p>
@endsection