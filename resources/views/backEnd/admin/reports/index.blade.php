@extends('backLayout.app')
@section('title')
    Report
@stop

@section('content')
    <center><h1>Reports </h1></center>
    <br>
    {{--<a href="{{ url('admin/reports/'.$idEvent.'/create') }}" class="btn btn-primary pull-right btn-sm">Add New Report</a>--}}
    <br>
    <br>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin-reports">
            <thead>
            <tr>

                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Event id</th>
                <th>Date Creation</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reports as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/events/'.$idEvent.'/reports', $item->id) }}">{{ $item->title }}</a></td>
                    <td>{{ substr($item->description,0,30) }}...</td>
                    <td>{{ $item->event_id }}</td>
                    <td>{{ $item->date_creation }}</td>
                    <td>
                        <a href="{{ url('admin/events/'.$idEvent.'/reports/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/events/'.$idEvent.'/reports', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}

                        <a href="{{ url('admin/reports/'.$idEvent.'/comments') }}" class="btn btn-info btn-xs">Comments</a>
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
            $('#tbladmin-reports').DataTable({
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