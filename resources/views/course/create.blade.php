<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Course</title>
</head>
<body>
    <section class="container mt-3">
        <h2 class="d-flex justify-content-center mb-3">Create Course</h2>
        <div class="row offset-md-2">
            <div class="col-6">
            <form action="{{URL::to('/store-course')}}" method="post">
                {{ csrf_field() }}
            <div class="form-group">
                <label for="">Course Name</label>
                <input type="text" class="form-control" name="course_name" id="">
            </div>
            <div class="form-group">
                <label for="">Course Code</label>
                <input type="text" class="form-control" name="course_name" id="">
            </div>
            <div class="form-group">
                <label for="">Course Type</label>
                <select name="course_type" class="form-control" id="">
                    <option value="">SELECT TYPE</option>
                    <option value="theory">Theory</option>
                    <option value="lab">Lab</option>
                </select>
                <div class="form-group">
                    <button class="btn btn-primary mt-2" type="submit">Add</button>
                </div>
            </div>
        </form>
            </div>
            <div class="col-6"></div>
        </div>
    </section>
</body>
</html>