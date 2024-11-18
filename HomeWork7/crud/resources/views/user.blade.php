<html>

<body>
    @if ($user)
        <table border="1px">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            </tbody>
        </table>
        <p>{{ $json }}</p>
    @else
        <p>Нет пльзователя с таким id</p>
    @endif
</body>

</html>
