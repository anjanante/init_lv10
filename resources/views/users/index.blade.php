@extends('layouts.app')

@section('body')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table  class="table  table-striped">
        <thead>
            <th scope="row">Name</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        @foreach ($users as $user)
        <tr>
            <td scope="row">{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href={{ route('users.show', $user->id) }}>SHOW</a></td>
        </tr>
        @endforeach
    </table>
    <a href={{ route('users.create') }} class="btn btn-primary">ADD USER</a>
    <x-alert/>
@endsection