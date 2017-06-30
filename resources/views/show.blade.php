@extends('layout')

@section('main-content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3 class="text-center">User Info</h3>

            <table class="table table-bordered table-responsive mt50">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="/" class="btn btn-sm btn-default">Back To Index</a>
                            <a href="/edit/{{ $user->id }}" class="btn btn-sm btn-info">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop