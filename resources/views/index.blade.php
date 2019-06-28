@extends('layouts.app')

@section('content')

 <div class="col-12 bg-white">
  <div class="row">
    @if($slider_home)
    <div class="col-md-12 col-12 p-0">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          @php $counter = -1; @endphp
          @foreach($slider_home as $slide)
            @php $counter++; @endphp          
              <li data-target="#carouselExampleIndicators" data-slide-to="{{ $counter }}" class="@if($counter == 0) active @endif"></li>
          @endforeach
        </ol>

        <div class="carousel-inner">
          @php $counter = 0; @endphp
          @foreach($slider_home as $slide)
            @php $counter++; @endphp
            <div class="carousel-item @if($counter == 1) active @endif">
              <a href="{{ $slide['link'] }}"> <img src="{{ $slide['image'] }}" class="d-block w-100" alt="slide{{ $counter }}" title="{{ get_bloginfo('name') }}"> </a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    @endif

  </div>

  <div class="row">
    @php dynamic_sidebar('sidebar-home') @endphp
  </div>  
 </div>

@endsection
