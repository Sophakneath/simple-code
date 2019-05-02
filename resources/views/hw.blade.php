@extends('component.layout')@section('body')
<div class="content">
        <div class="title m-b-md">
            Welcome To My Personal Webpage
        </div>
</div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/mountain1.jpg" class="d-block w-100" alt="me">
          </div>
          <div class="carousel-item">
            <img src="images/mountain2.jpg" class="d-block w-100" alt="you">
          </div>
          <div class="carousel-item">
            <img src="images/mountain3.jpg" class="d-block w-100" alt="i">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
@endsection