<!DOCTYPE html>
<html>

<head>
    <title>Create Product</title>
    <link href="https://fonts.bunny.net/css?family=ubuntu:300,400,500,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'ubuntu', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-create {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        .btn-create:hover {
            background-color: #0069d9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Create Product</h1>
        <form action="/post" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-create">Create</button>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
