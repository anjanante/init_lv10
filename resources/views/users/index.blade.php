<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            {{-- <td><a href={{ route('show', ['id' => $user->id]) }}>SHOW</a></td> --}}
        </tr>
        @endforeach
    </table>
    
</body>
</html>