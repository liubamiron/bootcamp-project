@extends('layout')

@section('content')
<main>
<h1 class="title-text text-center text-white">Appartments</h1>
<br>     
	<!-- ============== slide items Apartments ============= <img src="{{ asset('/assets/images/studio.jpg') }}"> -->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" data-items="3" data-margin="20" data-dots="true" data-nav="true">
     <div class="carousel-item active">
        <div class="card" style="width:400px">
        <img src="{{ asset('/assets/images/studio.jpg') }}" class="d-block w-100" alt="3 rooms apartment" style="width:100%">
            <div class="card-body">
                <h5 class="card-title">3 rooms apartment</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
        <div class="carousel-item">
           <div class="card" style="width:400px">
           <img src="{{ asset('/assets/images/studio.jpg') }}" class="d-block w-100" alt="2 rooms apartment" style="width:100%">
             <div class="card-body">
                  <h5 class="card-title">2 rooms apartment</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
             </div>
          </div>
    <div class="carousel-item">
        <div class="card" style="width:400px">
              <img src="{{ asset('/assets/images/studio.jpg') }}" class="d-block w-100" alt="1 room apartment" style="width:100%" >
            <div class="card-body">
             <h5 class="card-title">1 rooms apartment</h5>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
             <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<!-- ============== slide items Houses ============= -->
<h2 class="title-text text-center text-white"> Houses </h2>
<br>
<div id="carousel2" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" data-dots="true" data-nav="true">
        <div class="carousel-item active">
            <div class="card" style="width:400px">
                    <img src="{{ asset('/assets/images/studio.jpg') }}" class="d-block w-100" alt="3 rooms apartment" style="width:100%">
                <div class="card-body">
                     <h5 class="card-title">3 rooms apartment</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                      <a href="#" class="btn btn-primary">400 Euro</a>
                </div>
            </div>
        </div>

    <div class="carousel-item clearfix">           
        <div class="card" style="width:400px; float:left; margin: 0 10px 0 10px;">
           <img src="{{ asset('/assets/images/studio.jpg') }}" class="d-block w-100" alt="2 rooms apartment" style="width:100%">
             <div class="card-body">
                  <h5 class="card-title">2 rooms apartment</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                  <a href="#" class="btn btn-primary">300 Euro</a>
            </div>
        </div>
        <div class="card" style="width:400px; float:left; margin: 0 20px 0 ;">
           <img src="{{ asset('/assets/images/studio.jpg') }}" class="d-block w-100" alt="2 rooms apartment" style="width:100%">
             <div class="card-body">
                  <h5 class="card-title">2 rooms apartment</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                  <a href="#" class="btn btn-primary">300 Euro</a>
            </div>
        </div>
        <div class="card" style="width:400px; float:left; margin: 0 20px 0 0;">
           <img src="{{ asset('/assets/images/studio.jpg') }}" class="d-block w-100" alt="2 rooms apartment" style="width:100%">
             <div class="card-body">
                  <h5 class="card-title">2 rooms apartment</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                  <a href="#" class="btn btn-primary">300 Euro</a>
            </div>
        </div>
    </div>  
</div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
</div>
<br>
<!-- Hello {{$lifeAndStyleArticles}} -->
	<!-- ==========2==== owl slide items .end // ==-->
</main>
@endsection