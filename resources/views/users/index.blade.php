@extends('layouts.app')

@section('body')
    <table border=1>
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href={{ route('users.show', $user->id) }}>SHOW</a></td>
        </tr>
        @endforeach
    </table>
    <x-alert/>
@endsection