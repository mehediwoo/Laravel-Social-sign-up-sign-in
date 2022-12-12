@extends('layout.app')
@section('title','Dashboard')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/logout') }}" class="btn btn-sm btn-danger">Log Out</a>
                <div class="card bg-dark" style="width: 32rem;">

                    <img class="card-img-top" src="{{ session()->get('avator') }}" alt="Card image cap">
                    <div class="card-body">
                      <table class="table bg-dark text-white">
                        <tr>
                            <td>Name</td>
                            <td>{{ session()->get('name') }}</td>
                        </tr>
                        <tr>
                            <td>Nick Name</td>
                            <td>{{ session()->get('nickName') }}</td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>{{ session()->get('email') }}</td>
                        </tr>
                        <tr>
                            <td>User ID</td>
                            <td>{{ session()->get('userId') }}</td>
                        </tr>
                        <tr>
                            <td>User Token</td>
                            <td>{{ session()->get('token') }}</td>
                        </tr>
                      </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
