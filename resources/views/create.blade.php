@extends('layout')

@section('main-content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Create New User</h3>
            <div class="mt20 mb20">
                <a href="/" class="btn btn-default">Back To Index</a>
            </div>
            <hr>
            <form method="post" action="store">
                <div class="form-group">
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <button type="submit" class="btn btn-success">Add User</button>
                </div>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('Success_message'))
                    <div class="alert alert-success">
                        <p>{{ Session::get('Success_message') }}</p>
                    </div>
                @endif
            </form>
        </div>
    </div>
@stop