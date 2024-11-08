<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home page</title>
</head>

<body>
    <div>
        @extends('layouts.default')

        @section('content')
            @if ($data['age'] >= 18)
                <h1>{{ $data['name'] }}</h1>
                <p>{{ $data['age'] }}</p>
                <p>{{ $data['position'] }}</p>
                <p>{{ $data['address'] }}</p>
            @else
                <p>So very yang!</p>
            @endif
        @endsection
    </div>
</body>

</html>
