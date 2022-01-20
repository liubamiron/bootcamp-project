<!DOCTYPE HTML>

<html lang="en">



<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="LM"><!-- my name1 -->

	<title>AllRent</title>


	<!--<link rel="shortcut icon" type="image/x-icon" href="images/icons/building.png"> -->
	

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	
	
	<!-- custom javascript -->
	<!-- <script src="js/script.js" type="text/javascript"></script> -->
	
	<!--our styles -->
	
	<link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">

</head>



<body>
	<!-- <img src="{{ asset('/assets/images/studio.jpg') }}"> -->
<div class="container">
	<!--header-->
@include('header')
            <div class="row">
                <div class="col-lg-12">
@yield('content')


<div class="row">
 	<div class="col-xl-9 col-md-12 col-sm-12">
	 <!-- <div class="card" style="width:900px"> -->
   		<div class="card">
		   <div class="row">
		   		<div class="col-xl-6 col-md-10 col-sm-12">
		  	 			<img class="card-img-top" src="{{ asset('/assets/images/appartments/apart1_1.jpg') }}"></img>
			  				 <hr>
			   			
						<div style="display: inline-block";>
						<a href="{{route('appartmentsItem')}}"> <img  src="{{ asset('/assets/images/apart1_1resize.jpg') }}"></img></a>
						<a href="#"><img  src="{{ asset('/assets/images/apart1_3resize.jpg') }}"></img></a>
						<a href="#"><img  src="{{ asset('/assets/images/apart1resize.jpg') }}"></img></a>
						<!-- <hr> -->
						
						</div>

				</div>

				<div class="col-xl-6 col-md-10 col-sm-12">
		   			<div class="card-body">
				   	<h4 class="card-title">Appartment</h4>
    					<p class="card-text address">
							str. Stefan cel Mare 11/2 app. 23
						</p>
						<p>
						Apartment for rent in Chisinau with 2 separate bedrooms, 
						one nice living room and huge open terrace.
						<p>
						Perfect rent for a group for vacation rental in the center of Chisinau,
					 	in just one minute walk to main park and all center Chisinau attraction. 
						</p>
						<p>
						The apartment is located 
						in the heart of Chisinau with an easy access to public transportation to any point in Chisinau
						</p>
						</p>
							<br>
							<div class="text-end">
							 300 Euro/month <a href="#" class="btn btn-info">Book now</a>
							</div>
							<br>

					</div>
					
				</div>
				

			</div>  <!-- row closed -->

			<!-- start row -->

			<div class="row">
  <div class="col-sm-6">
    <div class="card border-0" style="max-width: 29rem;">
      <div class="card-body">
		  <br>
        <h3 class="card-title">Details</h3>
        <p class="card-text">
		Rooms - 2 <br>
					Balcony - 1 <br>
					Building type - New building <br>
					Floor - 5 <br>
					Bath -1 <br>
					Beds -2 <br>
					Square - 50 m2 <br>
				
		</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card border-0" style="max-width: 29rem;">
      <div class="card-body">
		  <br>
        <h3 class="card-title">Benefits</h3>
        <p class="card-text">
		<br>Elevator <br>
					Wi-Fi <br>
					Washing machine <br>
					Flat TV <br>
					Fridge <br>
					Shower cabin <br>
					Stove <br>
					Desk <br>
					Dishes <br>
					Microwave <br>
					Iron <br>
		</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
</div>


			<!-- <div class="row">
 				<div class="col-xl-12 col-md-10 col-sm-12">
				 <div class="card-body">
				 
					<h3 class="text-center"> Appartments details </h3>
					<p>Rooms - 2 <br>
					Balcony - 1 <br>
					Building type - New building <br>
					Floor - 5 <br>
					Square - 50 m2 <br>
					Bath -1 <br>
					Beds -2 <br>
				</p>

				<h3 class="text-center"> Appartments Benefits </h3>
					<p> Elevator <br>
					Wi-Fi <br>
					Washing machine <br>
					Flat TV <br>
					Fridge <br>
					Shower cabin <br>
					Stove <br>
					Desk <br>
					Dishes <br>
					Microwave <br>
					Iron <br>
					</p>



				</div>

				</div>
			</div> -->



  		</div>
	</div>
	<aside class="col-xl-3 col-md-4 col-sm-12">
                    <div class="card">
					<div class="card-header">
                            Owner
                        </div>
                        <div class="card-body small">
                            <h5>Alex Sparrow </h5> <br>
                        
							
                            email: alex@gmail.com <br>
                            telephone: 222222
                            <hr>


						<form action>

                             <input type="date" class="form-control border" id="date" placeholder="Check in"> <br>
                            <input type="date" class="form-control border" placeholder="Check out" id="date" > <br>
						</form>

					<div class="form-group">
					<input type="submit" value="Check availability" class="btn btn-warning form-control" style="color: black">
					</div>
							

                        </div>
                        <!--card-body.// -->
                    </div> <!-- card.// -->

					<div class="card mt-3">
                        <div class="card-header">
                            You may like
                        </div>
                        <div class="card-body row">
                            <div class="col-md-12 col-sm-3">
                                <figure class="figure">
								<a href="{{route('appartmentsItem')}}">
									 <img  src="{{ asset('/assets/images/apart1_1resize.jpg') }}" alt="appartment rent"></img></a>
                                    <figcaption class="figure-caption text-start">
                                        <a href="{{route('appartmentsItem')}}" class="card-title">3 rooms appartment</a>
                                        <div class="price-wrap mb-3">
                                            <span class="price-new">400 Euro/month</span> <del class="price-old">500 Euro/month</del>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure> <!-- card-product // -->
                            </div> <!-- col.// -->

                            <div class="col-md-12 col-sm-3">
                              
							<figure class="figure">
							<a href="{{route('appartmentsItem')}}">
									 <img  src="{{ asset('/assets/images/apart1_1resize.jpg') }}"
									 	 	class="figure-img img-fluid rounded" alt="appartment rent"></img></a>
 									 <figcaption class="figure-caption text-start">
										   <a href="{{route('appartmentsItem')}}" class="card-title">1 room appartment</a>
										   <div class="price-wrap mb-3">
                                            <span class="price-new">200 Euro/month</span> <del class="price-old">300 Euro/month</del>
                                        </div> <!-- price-wrap.// -->

									  </figcaption>
							</figure>

							<!-- card-product // -->
                            </div> <!-- col.// -->
                            <div class="col-md-12 col-sm-3">
                                
							<figure class="figure">
							<a href="{{route('appartmentsItem')}}">
									 <img  src="{{ asset('/assets/images/apart1_1resize.jpg') }}"
									 	 	class="figure-img img-fluid rounded" alt="appartment rent"></img></a>
 									 <figcaption class="figure-caption text-start">
										   <a href="{{route('appartmentsItem')}}" class="card-title">2 rooms appartment</a>
										   <div class="price-wrap mb-3">
                                            <span class="price-new">300 Euro/month</span> <del class="price-old">350 Euro/month</del>
                                        </div> <!-- price-wrap.// -->

									  </figcaption>
							</figure>
							<!-- card-product // -->
                            </div> <!-- col.// -->
                        </div> <!-- card-body.// -->
                    </div> <!-- card.// -->


					</div>

					
	</asside>
	<br>
  
</div>
 
</div>
</div>

</div>
<!-- </div> -->

	<!-- ========================= SECTION CONTENT END// ========================= -->
	<!-- ========================= FOOTER ========================= -->
	@include('footer')
	
</body>
</html>