@extends('backLayout.app')
@section('title')
    Comment
@stop

@section('content')

    <h1>Comment</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>ID.</th>
                <th>Description</th>
                <th>User Id</th>
                <th>Report Id</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $comment->id }}</td>
                <td> {{ $comment->description }} </td>
                <td> {{ $comment->user_id }} </td>
                <td> {{ $comment->report_id }} </td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection