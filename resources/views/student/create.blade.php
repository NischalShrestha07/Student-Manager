<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <h1>Create Student</h1>
            <a class="btn btn-primary" href="{{ route('student.index') }}">Back</a>
        </div>
        <form action="{{ route('student.store') }}" method="POST" class="form-control" style="margin: 13px">
            @csrf

            @method('POST')
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Name:</label>
                <input type="text" class="form-control" placeholder="Name" id="name" name="name">
            </div>
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Age:</label>
                <input class="form-control" placeholder="Age" id="age" name="age">
            </div>
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Class:</label>
                <input class="form-control" placeholder="Class" id="class" name="class">
            </div>
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Address:</label>
                <input type="text" class="form-control" placeholder="Address" id="address" name="address">
            </div>
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Father Name:</label>
                <input type="text" class="form-control" placeholder="Father name" id="fathername" name="fathername">
            </div>
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Mother Name:</label>
                <input type="text" class="form-control" placeholder="Mother name" id="mothername" name="mothername">
            </div>
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Mobile No:</label>
                <input class="form-control" placeholder="Mobile Number" id="mobno" name="mobno">
            </div>
            <button type="submit" style="margin: 12px" class="btn btn-success">Save</button>

        </form>

    </div>

</body>

</html>
