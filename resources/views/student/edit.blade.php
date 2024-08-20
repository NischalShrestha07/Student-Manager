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
            <h1>Update Student</h1>
            <a class="btn btn-primary" href="{{ route('student.index') }}">Back</a>
        </div>
        <form action="{{ route('student.update', $student) }}" method="POST" class="form-control" style="margin: 13px">
            @csrf

            @method('PUT')
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Name:</label>
                <input type="text" class="form-control" value="{{ old('name', $student->name) }}" id="name"
                    name="name">
            </div>
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Age:</label>
                <input class="form-control" value="{{ old('age', $student->age) }}" id="age" name="age">
            </div>
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Class:</label>
                <input class="form-control" value="{{ old('name', $student->class) }}" id="class" name="class">
            </div>
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Address:</label>
                <input type="text" class="form-control" value="{{ old('name', $student->address) }}" id="address"
                    name="address">
            </div>
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Father Name:</label>
                <input type="text" class="form-control" value="{{ old('name', $student->fathername) }}"
                    id="fathername" name="fathername">
            </div>
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Mother Name:</label>
                <input type="text" class="form-control" value="{{ old('name', $student->mothername) }}"
                    id="mothername" name="mothername">
            </div>
            <div class="form-group" style="margin:12px">
                <label for="name" class="h3">Mobile No:</label>
                <input class="form-control" value="{{ old('name', $student->mobno) }}" id="mobno" name="mobno">
            </div>
            <button type="submit" style="margin: 12px" class="btn btn-success">Save</button>

        </form>

    </div>

</body>

</html>
