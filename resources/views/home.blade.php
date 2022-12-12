@extends('layout.app')
@section('title','Login with Social Media')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5">


                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">User Login</h5>
                      <a href="{{ url('/joinup') }}" class="btn btn-sm btn-danger" style="width: 100%">Sign in with github</a> <br>

                      <a href="{{ url('/joinup') }}" class="mt-4 btn btn-sm btn-dark" style="width: 100%">Sign up with github</a>

                      <a href="{{ url('/google') }}" class="mt-4 btn btn-sm btn-danger" style="width: 100%">Sign in with Google</a>

                      <a href="{{ url('/facebook') }}" class="mt-4 btn btn-sm btn-primary" style="width: 100%">Sign in with Facebook</a>

                      <a href="{{ url('/linkedin') }}" class="mt-4 btn btn-sm btn-success" style="width: 100%">Sign in with LinkedIn</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


@endsection
