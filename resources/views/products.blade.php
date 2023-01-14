<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section class="container mt-3">
        <h2 class="d-flex justify-content-center">Products</h2>
        <div>
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                </thead>
                <tbody>
                @if($products)
                    @foreach($products as $p)
                    <tr>
                        <td>{{$p['id']}}</td>
                        <td>{{$p['name']}}</td>
                        <td>{{$p['price']}}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3" class="text-center">No Data Found</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>