<html>

<body>
    <div class="add-books__form-wrapper">
        <form name="add-new-book" id="add-new-book" method="POST" action={{ route('addBook') }}>
            @csrf
            <div class="form-section">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-section">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" class="form-control">
            </div>
            <div class="form-section">
                <label for="genre">Choose Genre</label>
                <select name="genre" id="genre">
                    <option value="fantasy">Fantasy</option>
                    <option value="ski-fi">Sky-Fi</option>
                    <option value="mistery">Mystery</option>
                    <option value="drama">Drama</option>
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </div>
</body>

</html>
