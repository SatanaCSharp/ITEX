@extends('publicPart.layouts.app')
@section('content')
  <main>
    @foreach($company as $company)
    <div class="jumbotron card_company">
     <div class="container-fluid   ">
      <div class="row">
       <div class="col-md-3 logo_catd">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTSY3xESDw7F6gfJRfxVU8Cef3h3slFcozTVdggsfd-2IObLjyw" alt="Logo" class="imgLogo">
        <div class="participents">
              12
        </div>
       </div>
       <div class="col-md-6 info_card">
        <ul class="nav flex-column desc_comp" >
         <li class="nav-item ">
          <span class="card_text"> {{ $company}} 27.03.18 23:00</span>
         </li>
         <li class="nav-item">
            <p class="desc_exc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur debitis, exercitationem labore natus nemo quis ut velit voluptatum! Excepturi in nobis optio pariatur perferendis provident quisquam quod. Cum, minima, nemo.</p>
         </li>
         <li class="nav-item elem_last">
              <span class="card_text "> Vinnitsa Keletska str. 27a</span>
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
              <li><button type="button" class="btn btn-light partic2">Participate</button></li>
              <li><button type="button" class="btn btn-light report">Reporte</button></li>
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