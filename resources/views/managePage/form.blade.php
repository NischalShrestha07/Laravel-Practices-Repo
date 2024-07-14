<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form</title>
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">

</head>

<body>

    {{-- <form action="{{route('register')}}" method="POST"> --}}
        <form action="{{url('/')}}/register" method="POST">
            @csrf
            <div class="container">
                <h1 class="text-center">Registration</h1>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" aria-describedby="helpId">
                    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" aria-describedby="helpId">
                    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control" aria-describedby="helpId">
                    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                </div>
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
</body>

</html>