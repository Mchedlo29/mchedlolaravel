<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('storeposts') }}" method="POST" >
            @csrf
            <input type="text" class="form-control" name="title" >
            <textarea name="description" class="form-control"></textarea> 
            <button class="btn btn-primary w-100">save</button>
</form>
    </div>
</body>
    </html>