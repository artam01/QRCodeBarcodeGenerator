<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
    <link href="https://fonts.bunny.net/css?family=ubuntu:300,400,500,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'ubuntu', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .btn-new-post {
            background-color: #28a745;
            color: #fff;
            font-weight: bold;
        }

        .btn-new-post:hover {
            background-color: #218838;
        }

        .table {
            margin-top: 20px;
        }

        .table h1 {
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .table th {
            font-weight: bold;
            font-size: 18px;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .table td:first-child {
            text-transform: capitalize;
        }

        .table td:last-child {
            max-width: 250px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>List of Products</h1>
        <div class="pb-2">
            <a href="/create" class="btn btn-new-post">New Post</a>
        </div>
        <div class="table-responsive">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Barcode</th>
                        <th scope="col">QRCode</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{!! DNS1D::getBarcodeHTML($product->product_code, 'C39+') !!}</td>
                            <td>{!! DNS2D::getBarcodeHTML($product->product_code, 'QRCODE') !!}</td>
                            <td>{{ $product->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
