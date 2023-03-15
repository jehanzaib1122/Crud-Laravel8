<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD Operation</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-10 margin-tb">
            <div class="pull-left">
                <h2>Laravel CRUD Operation</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employee.create') }}"> Create New Employee</a>
            </div>
        </div>
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>phone</th>
            <th>Adress</th>
            <th>Wattsapp Number</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->email }}</td>
                <td>{{ $product->phone }}</td>
                <td>{{ $product->address }}</td>
                <td>{{ $product->wattsapp_number }}</td>
                <td>


                    <a class="btn btn-primary" href="{{ route('employees.edit',$product->id) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('employees.delete',$product->id) }}">Delete</a>

                </td>
            </tr>
        @endforeach
    </table>

</div>

</body>
</html>
