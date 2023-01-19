<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>All Courses</title>
</head>
<body>
    <section class="container mt-3">
        <h2 class="d-flex justify-content-center">Courses</h2>
        <div>
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Type</th>
                </thead>
                <tbody>
                @if($courses)
                    @foreach($courses as $c)
                    <tr>
                        <td>{{$c->id}}</td>
                        <td>{{$c->course_name}}</td>
                        <td>{{$c->course_code}}</td>
                        <td>{{$c->course_type}}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center">No Data Found</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>