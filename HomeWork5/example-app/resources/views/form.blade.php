<html>

<body>
    <h1>Add Employee</h1>
    <form name="employee-form" id="employee-form" method="POST" action={{ route("employee") }}>
        @csrf
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" name="firstname" class="form-control" required="true">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" id="lastname" name="lastname" class="form-control" required="true">
        </div>
        <div class="form-group">
            <label for="profession">Profession</label>
            <input type="text" id="profession" name="profession" class="form-control" required="true">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required="true">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
