<html>

<body>
    <h1>Logs</h1>
    <table border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Time</th>
                <th>Duration</th>
                <th>IP</th>
                <th>URL</th>
                <th>Method</th>
                <th>Input</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->time }}</td>
                    <td>{{ $row->duration }}</td>
                    <td>{{ $row->ip }}</td>
                    <td>{{ $row->url }}</td>
                    <td>{{ $row->method }}</td>
                    <td>{{ $row->input }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
