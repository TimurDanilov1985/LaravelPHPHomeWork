<html>

<head>
    <title>User Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="container nt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                <p>User Form</p>
            </div>
            <div class="card-body">
                <form class="add-blog-post-form" id="add-blog-post-form" method="post" action={{ route('formData') }}>
                    @csrf
                    <div class="form-group">
                        <label for="username">Firstname</label>
                        <input type="text" id="username" name="firstname" class="form-control" required="">
                        <label for="lastname">Lastname</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" required="">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control" required="">
                    </div>
                    <button type="submit" class=btn btn-ptimary>Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
