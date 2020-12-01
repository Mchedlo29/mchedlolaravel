@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;">Dashboard</div>

                <div class="card-body" style="text-align: center;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Auth::User()->name }} You are logged in!
                    <br><br>
                    <a class="btn btn-success" href="{{ route('main') }}">Press here to post something</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
