@extends('layouts.app')

@section('body')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href={{ route('posts.create') }} class="btn btn-primary">ADD post</a>
    <table  class="table  table-striped">
        <thead>
            <th scope="row">Name</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        @foreach ($posts as $post)
        <tr>
            <td scope="row">{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td><a href={{ route('posts.show', $post->id) }}>SHOW</a></td>
        </tr>
        @endforeach
    </table>
    {!! $posts->links() !!}
@endsection