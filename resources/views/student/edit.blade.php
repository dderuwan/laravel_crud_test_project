<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create Student</title>
</head>

<body class="container">
    <form class="mt-5" action="{{ route('student.update',$student->id) }}" method="POST">
       @method('PUT')
        @csrf
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>

        @endif
        <div class="form-group">
            <label for="exampleInputEmail1">Student First Name</label>
            <input type="text" class="form-control" placeholder="Enter Student First Name" name="first_name" value="{{ $student->first_name}}" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student Last Name</label>
            <input type="text" class="form-control" placeholder="Enter Student Last Name"name="last_name" value="{{ $student->last_name }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student Contact No</label>
            <input type="number" class="form-control" placeholder="Enter Student Contact No" name="contact_no" value="{{ $student->contact_no }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student Address</label>
            <input type="text" class="form-control" placeholder="Enter Student Address" name="address" value="{{ $student->address }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student Birthday</label>
            <input type="text" class="form-control" placeholder="Enter Student Birthday" name="dob" value="{{ $student->dob }}">
        </div>
        <div class="mt-3">
           <button type="submit" class="btn btn-primary ">Update</button>
           <a href="{{ route('student.index') }}" type="" class="btn btn-dark ">Back</a>
        </div>

    </form>
</body>

</html>
