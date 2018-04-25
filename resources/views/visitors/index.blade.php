@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header"><div class="float-left"><h5>Visitors</h5></div></div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>IP ADDRESS</td>
                    <td>Country</td>
                    <td>Device</td>
                    <td>Browser</td>
                    <td>Typing speed</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($visitors as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->ip_address }}</td>
                        <td>{{ $value->country }}</td>
                        <td>{{ $value->device }}</td>
                        <td>{{ $value->browser }}</td>
                        <td>{{ $value->typing_speed }}</td>
                        <td>
                            {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['visitors.destroy', $value->id ]
                            ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-small btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
