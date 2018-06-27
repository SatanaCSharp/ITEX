@extends('publicPart.layouts.app')
@section('content')
  <main>
    @foreach($company as $company)
    <div class="jumbotron card_company">
     <div class="container-fluid   ">
      <div class="row">
       <div class="col-md-3 logo_catd">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTSY3xESDw7F6gfJRfxVU8Cef3h3slFcozTVdggsfd-2IObLjyw" alt="Logo" class="imgLogo">
        <div>
         <p class="partic">Participents : 12 </p>
        </div>
       </div>
       <div class="col-md-7 info_card">
        <ul class="nav flex-column desc_comp" >
         <li class="nav-item ">
          <i class="far fa-building fa-2x"> <span> {{ $company}}</span></i>
         </li>
         <li class="nav-item ">
          <i class="fas fa-bullseye fa-2x"> <span>Cruize on the Medeterranean Sea.</span></i>
         </li>
         <li class="nav-item">
          <i class="fas fa-map-marker-alt fa-2x"> <span>Kiev. The street of Peti Pupkina</span></i>
         </li>
         <li class="nav-item">
          <i class="far fa-calendar-alt fa-2x"> <span> Departure : 25/04/2018</span></i>
         </li>
        </ul>
       </div>
       <div class="col-md-2 info_card2">
        <ul class="nav flex-column">
         <li>
          <a href="#" class="review_comp"><i class="far fa-eye fa-2x"></i></a>
         </li>
         <li>
          <button type="button" class="btn btn-light partic2">Participate</button>
         </li>
        </ul>
       </div>
      </div>
     </div>
    </div>
     @endforeach
  </main>

@endsection