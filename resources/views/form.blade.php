<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Import File</title>
</head>
<body>
@include('Navbar')
    <section class="form-upload p-5 m-5 ">
        <div class="container">
            <div class="col-md-6 offset-md-3">
                <!-- Alert message (start) -->
        @if(Session::has('message'))
        <div class="alert {{ Session::get('alert-class') }}">
            {{ Session::get('message') }}
        </div>
        @endif 
        <!-- Alert message (end) -->
                <div class="card">
                    <div class="card-header">
                        Upload Csv File
                    </div>
                    <div class="car-body">
                        <form method="post" enctype="multipart/form-data" action="{{route('employee.import')}}">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="file" class="form-control p-1">
                            @if ($errors->has('file'))
                <span class="errormsg text-danger">{{ $errors->first('file') }}</span>
                @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>