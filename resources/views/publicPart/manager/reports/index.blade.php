@extends('publicPart.layouts.app')

@section('content')
        <div class=" jumbotron-fluid report-manager-main col-md-10">
            <div class="report-title-manager">
              <center> <h1>{{$report->title}}</h1></center>
            </div>

           <div class="report-images">
               @forelse($reports as $item)
                   {!! Html::image('/images/reports/idEvent-'.$idEvent.'/'.$item->images ) !!}
               @empty
                   <h3>There are no images</h3>
               @endforelse
           </div>
            <div class="report-desc-manager">
                <span> <span class="margin-desc"></span>{{$report->description}}</span>
            </div>
        </div>
@endsection