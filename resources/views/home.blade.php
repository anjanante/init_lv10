<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>I use {{ $framework }}</h1>
    @if ($framework === 'Laravel')
        Cool!
    @else
        Bad
    @endif

    @unless (Auth::check())
        Not connected
    @endunless

    @isset($framework)
        Var exist
    @endisset

    @for ($a=0; $a < 10; $a++)
        Hello, for loop {{ $a }} <br />
    @endfor
</body>
</html>