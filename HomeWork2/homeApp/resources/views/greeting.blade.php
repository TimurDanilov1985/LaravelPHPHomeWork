<html>

<head>
    <title>Greeting User</title>
</head>

<body>
    <p>Привет, {{ $user['firstname'] }} {{ $user['lastname'] }}</p>
    <p>Email: {{ $user['email'] }}<p>
</body>
