<html>

<body>
    <table border="1px">
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->surname }}</td>
                    <td>{{ $row->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>{{ $json }}<p>
</body>

</html>
