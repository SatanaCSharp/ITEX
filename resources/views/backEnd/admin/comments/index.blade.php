@extends('backLayout.app')
@section('title')
    Comment
@stop

@section('content')

    <h1>Comments <a href="{{ url('admin/comments/create') }}" class="btn btn-primary pull-right btn-sm">Add New
            Comment</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin-comments">
            <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>User Id</th>
                <th>Report Id</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/comments', $item->id) }}">{{ $item->description }}</a></td>
                    <td>{{ $item->user_id }}</td>
                    <td>{{ $item->report_id }}</td>
                    <td>
                        <a href="{{ url('admin/comments/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/comments', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#tbladmin-comments').DataTable({
                columnDefs: [{
                    targets: [0],
                    visible: false,
                    searchable: false
                },
                ],
                order: [[0, "asc"]],
            });
        });
    </script>
@endsection