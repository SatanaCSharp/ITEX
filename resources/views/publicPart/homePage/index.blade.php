@extends('publicPart.layouts.app')
@section('content')
    <main>
        @foreach($excursions as $item)
                <div class="jumbotron card_company">
                    <div class="container-fluid   ">
                        <div class="row">
                            <div class="col-md-3 logo_catd">
                                <div class="company-logo-manager">
                                {!! Html::image('images/company/logos/'.$item->title_company.'/'.$item->logo.'') !!}
                                </div>
                                <div class="participents">
                                    12
                                </div>
                            </div>
                            <div class="col-md-6 info_card">
                                <ul class="nav flex-column desc_comp">
                                    <li class="nav-item ">
                                        <span class="card_title"> {{$item->title_excursion}} {{$item->date}}</span>
                                    </li>
                                    <li class="nav-item">
                                        <p class="desc_exc">{{$item->description}} </p>
                                    </li>
                                    <li class="nav-item ">
                                        <p class="desc_exc ">{{$item->address}} </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 info_card2">
                                <ul class="nav flex-column">
                                    <li>
                                        <a href="#" class="review_comp"><i class="far fa-eye fa-2x"></i></a>
                                    </li>
                                    <li class="myBtn2">
                                        <ul class="myBtn">
                                            <li>
                                                <button type="button" class="btn btn-light partic2">Participate</button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn btn-light report">Report</button>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    </main>

@endsection