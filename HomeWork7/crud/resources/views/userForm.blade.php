<html>

<body>
    <h1>User Form</h1>
    <form method="POST", action={{ Route('save') }}>
        @csrf
        <label for="name">Name:</label>
        <input id="name" type="text" name="name"><br><br>
        <label for="surname">Surname:</label>
        <input id="surname" type="text" name="surname"><br><br>
        <label for="email">Email:</label>
        <input id="email" type="email" name="email"><br><br>
        <input type="submit" value="submit">
    </form>
    @foreach ($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
</body>

</html>
