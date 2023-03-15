<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create</title>
</head>
<body>
<div class="container col-md-10">
    <h1>Create</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name" value="{{$employee->name}}" class="form-control">
        <input type="text" name="email" placeholder="email" value="{{$employee->email}}" class="form-control">
        <input type="text" name="phone" placeholder="phone" value="{{$employee->phone}}" class="form-control">
        <input type="text" name="address" placeholder="address" value="{{$employee->address}}" class="form-control">
        <input type="text" name="wattsapp_number" placeholder="wattsapp_number"value="{{$employee->wattsapp_number}}" class="form-control">
        <button type="submit" class="btn btn-primary"> Update</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</div>
</body>
</html>
