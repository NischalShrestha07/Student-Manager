<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="navbar mt-14">
            <h1>Students Details</h1>
            <a href="{{ route('student.create') }}" class="btn btn-success">Add New Student</a>

        </div>
        {{-- session --}}
        @if (@session('success'))
            <span class="h4 alert alert-success">{{ session('success') }}</span>
        @endif
        <br><br>
        <div class="container">

            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Class</th>
                        <th>Address</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Mobile No</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->age }}</td>
                            <td>{{ $item->class }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->fathername }}</td>
                            <td>{{ $item->mothername }}</td>
                            <td>{{ $item->mobno }}</td>
                            <td>
                                <div class="d-flex  gap-2">

                                    <a href="{{ route('student.edit', $item) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('student.show', $item) }}" class="btn btn-warning">View</a>
                                    <form action="{{ route('student.destroy', $item) }}" method="POST"
                                        class="btn btn-danger">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"
                                            onclick=" return confirm('Do You Want to Delete It? ')">Delete</button>
                                    </form>
                                </div>
                            </td>
                            <th>

                        </tr>
                    @endforeach


                </tbody>

            </table>
        </div>
    </div>

</body>

</html>
