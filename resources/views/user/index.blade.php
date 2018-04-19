@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header"><div class="float-left"><h5>Users</h5></div><div class="float-right"><a class="btn btn-small btn-success" href="{{ URL::to('user/create') }}">Add</a></div></div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>
                            <a class="btn btn-small btn-warning" href="{{ URL::to('user/' . $value->id . '/edit') }}">Edit</a>
                            @if ($value->name != 'admin')
                                <a class="btn btn-small btn-danger" href="{{ URL::to('user/' . $value->id . '/edit') }}">Delete</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
