@extends('layouts.main')
@section('create')
    <div class="container mt-5">
        <form action="{{ route('adminproducts') }}" method="POST">
            @csrf
            <input type="text" class="form-control" name="title" placeholder="title">
            <input type="text" class="form-control" name="text" placeholder="text">
            <textarea name="short_description" class="form-control" placeholder="short description"></textarea>
            <input type="text" class="form-control" name="img_url" placeholder="img url">
            <button class="btn btn-primary w-100">save</button>
        </form>
@endsection