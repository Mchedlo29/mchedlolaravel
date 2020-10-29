<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"  type="text/css" href="{{ asset('css/app.css') }}">

</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('adminupdate') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">
            <input type="text" class="form-control" name="title" value="{{ $product->title }}">
            <input type="text" class="form-control" name="text" value="{{ $product->text }}">
            <textarea name="short_description" class="form-control">
                {{ $product->short_description  }}
            </textarea>
            <input type="text" class="form-control" name="img_url" value="{{ $product->img_url }}">
            <button class="btn btn-primary w-100">update</button>
        </form>
</html>
 