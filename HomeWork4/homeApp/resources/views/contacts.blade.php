<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contacts</title>
</head>

<body>
    <div>

        @extends('layouts.default')

        @section('content')
            @if ($data['email'] !== '')
            <h1>{{ $data['address'] }}</h1>
            <p>{{ $data['post_code'] }}</p>
            <p>{{ $data['email'] }}</p>
            <p>{{ $data['phone'] }}</p>
            @else
                <p>The email address is not specified!</p>
            @endif
        @endsection

    </div>
</body>

</html>