@extends('layout')

@section('main-content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Update User</h3>
            <div class="mt20 mb20">
                <a href="/" class="btn btn-default">Back To Index</a>
            </div>
            <hr>

            {!! Form::model($user, ['method' => 'PATCH',
             'action' => ['CrudController@update', 'id' => $user->id]]) !!}

                <div class="form-group">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Update User', ['class' => 'btn btn-success']) !!}
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
                @if(Session::has('update_message'))
                    <div class="alert alert-success">
                        <p>{{ Session::get('update_message') }}</p>
                    </div>
                @endif
            {!! Form::close() !!}
        </div>
    </div>
@stop