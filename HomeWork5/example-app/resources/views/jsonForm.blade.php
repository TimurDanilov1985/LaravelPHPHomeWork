<html>

<body>
    <h1>Add JSON</h1>
    <form name="employee-form" id="employee-form" method="POST" action={{ route('parse') }}>
        @csrf
        <div class="form-group">
            <label for="json">Input JSON</label>
            <textarea type="text" id="json" name="json" class="form-control" required="true">{{ $json }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
