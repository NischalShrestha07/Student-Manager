<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container">

    <div class="navbar d-flex gap-45">
        <h1 class="text-danger"> Student Datas</h1>
        <a class="btn btn-primary" href="{{ route('student.index') }}">Back</a>
    </div>

    <div class="container m-12 " style="border: 3px solid black">
        <div class=" row ">
            <h1>ID: <span>{{ $student->id }}</span>
            </h1> <br>
            <h1>Name: <span>{{ $student->name }}</span></h1>
            <h1>Age: <span>{{ $student->age }}</span></h1>
            <h1>Class: <span>{{ $student->class }}</span></h1>
            <h1>Address: <span>{{ $student->address }}</span></h1>
            <h1>Father Name: <span>{{ $student->fathername }}</span></h1>
            <h1>Mother Name: <span>{{ $student->mothername }}</span></h1>
            <h1>Mobile Number: <span>{{ $student->mobno }}</span></h1>
        </div>
        <div class="btn d-flex  gap-2">
            <a href="{{ route('student.edit', $student) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('student.destroy', $student) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>

            </form>

        </div>
    </div>


</div>

<body>

</body>

</html>
