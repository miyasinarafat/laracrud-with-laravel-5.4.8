@extends('layout')

@section('main-content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center">Welcome to crud with laravel Application.</h2>
            <div class="mt50 mb20">
                <a href="create" class="btn btn-default">Add New User</a>
            </div>
            @if(Session::has('delete_message'))
                <div class="alert alert-success text-center">
                    <p>{{ Session::get('delete_message') }}</p>
                </div>
            @endif
            <table class="table table-bordered table-responsive mb50">
                <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                <? $i = 0; ?>
                @foreach($allUser as $oneUser)
                    <? $i++; ?>
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $oneUser->id }}</td>
                        <td>{{ $oneUser->name }}</td>
                        <td>{{ $oneUser->email }}</td>
                        <td>
                            <a href="/show/{{ $oneUser->id }}" class="btn btn-sm btn-success">Show</a>
                            <a href="/edit/{{ $oneUser->id }}" class="btn btn-sm btn-info">Edit</a>
                            {!! Form::open([
                                'method' => 'DELETE',
                                'onsubmit' => 'return confirmDelete()',
                                'action' => ['CrudController@delete', $oneUser->id],
                                'class'=>'formdi'
                            ]) !!}
                            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('footer')
    <script>
        function confirmDelete() {
            var result = confirm('Are you sure you want to delete?');

            if (result) {
                return true;
            } else {
                return false;
            }
        }
    </script>
@stop