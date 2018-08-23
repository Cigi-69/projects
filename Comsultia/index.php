<!-- INCLUDING SCRIPT FOR HANDLING THE FORM -->
<?php include 'form_process.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|Roboto:300,400&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Bory Bývanie</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg fixed-top text-uppercase navbar-light">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="img/logo.png" alt="Borry Bývanie - logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse ml-3" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item">
				<a class="nav-link" href="#">O Projekte</a>
			  </li>
			  <li class="nav-item ml-2">
			    <a class="nav-link" href="#">Lokalita</a>
			  </li>
			  <li class="nav-item ml-2">
			    <a class="nav-link" href="#">Byty</a>
			  </li>
			  <li class="nav-item ml-2 active">
			    <a class="nav-link" href="#">Galéria</a>
			  </li>
			  <li class="nav-item ml-2">
			    <a class="nav-link" href="#">Naša Štvrť</a>
			  </li>
			  <li class="nav-item ml-2">
			    <a class="nav-link" href="#">Kontakt</a>
			  </li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<button class="btn btn-primary mx-2 px-4 py-2 text-uppercase" type="submit">Mám záujem</button>
				</li>
				<li class="nav-item">
					<a id="filter" class="nav-link text-uppercase" href="#"><i class="fas fa-sliders-h mr-2"></i>Vyhľadať Byt</a>
				</li>
			</ul>
		</div>
	  </div>
	</nav>

	<!-- CAROUSEL START-->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="img/carousel_1.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/carousel_2.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/carousel_3.jpg" alt="Third slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/carousel_4.jpg" alt="Fourth slide">
	    </div>
	  </div>
	</div>
	<!-- CAROUSEL END-->

	<div id="switch" class="container mt-5">
		<div class="d-flex justify-content-center text-uppercase">
			<div class="d-flex btn-group">
				<div class="bg-light d-flex">
					<p class="navbar-toggler btn-group" data-toggle="toggle" data-target="#gItems1" aria-controls="gItems1" aria-label="Toggle Gallery item" href="#"><span id="B1"></span></p>
					<ul class="collapse navbar-collapse list-inline" id="gItems1">
						<li class="list-inline-item">
							<a href="#">Interiér</a>
						</li>
						<li class="list-inline-item">
							<a href="#">Exteriér</a>
						</li>
					</ul>
				</div>
				<div class="bg-light d-flex">
					<p class="navbar-toggler btn-group d-inline" data-toggle="toggle" data-target="#gItems2" aria-controls="gItems2" aria-label="Toggle Gallery item" href="#"><span id="B2"></span></p>
					<ul class="collapse navbar-collapse list-inline" id="gItems2">
						<li class="list-inline-item">
							<a href="#">Interiér</a>
						</li>
						<li class="list-inline-item">
							<a href="#">Exteriér</a>
						</li>
						<li class="list-inline-item">
							<a href="#">Všetko</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- GALLERY START-->
	<div class="container mt-5">
		<div class="card-columns">

			<div class="card d-none">
      			<a href="#"><img class="card-img" src="img/img12.jpg"></a>
			</div>
  			<div class="card">
	    		<a href="#"><img class="card-img" src="img/img11.jpg"></a>
			</div>
  			<div class="card">
       			<a href="#"><img class="card-img" src="img/img10.jpg"></a>
			</div>
  			<div class="card">
       			<a href="#"><img class="card-img" src="img/img9.jpg"></a>
			</div>

  			<div class="card d-none">
       			<a href="#"><img class="card-img" src="img/img8.jpg"></a>
  			</div>
  			<div class="card">
      			<a href="#"><img class="card-img" src="img/img7.jpg"></a>
			</div>
    		<div class="card d-none">
    			<a href="#"><img class="card-img" src="img/img6.jpg"></a>
  			</div>
  			<div class="card">
       			<a href="#"><img class="card-img" src="img/img5.jpg"></a>
  			</div>

    		<div class="card d-none">
       			<a href="#"><img class="card-img" src="img/img4.jpg"></a>
  			</div>
      		<div class="card">
       			<a href="#"><img class="card-img" src="img/img3.jpg"></a>
  			</div>
        	<div class="card">
       			<a href="#"><img class="card-img" src="img/img2.jpg"></a>
  			</div>
        	<div class="card">
       			<a href="#"><img class="card-img" src="img/img1.jpg"></a>
  			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 offset-md-5 my-4">
				<button id="more" type="button" class="btn btn-outline-primary justify-content-center px-4">Viac</button>
			</div>
		</div>

	</div>
	<!-- GALLERY END-->

	<!-- FOOTER START-->
	<div class="wrapper bg-light text-center pt-5">
		<div class="container pb-1">
			<div class="row text-center">
				<div class="col-lg-4 col-md-12">
					<h4 class="mb-4">Predajné miesto a vzorový byt</h4>
					<h3 >Nákupné centrum Borry Mall</h3>
					<p>Otváracie hodiny predajného miesta:</p>
					<p>PO-ŠTV: 10.30 - 19.00 </p>
					<p>PIA: 9.30 - 18.00</p>
					<p>Otváracie hodiny vzorového bytu:</p>
					<p>PO-ŠTV: 10.30 - 19.00</p>
					<p>PIA: 9.30 - 18.00</p>
				</div>

				<!-- CONTACT FORM START-->
				<div class="col-lg-4 col-md-12">
					<h4 class="mb-4">Kontaktný formulár</h4>
					<p class="mb-4">
						Zaujala vás ponuka našich bytov? Vyplňte kontaktný formulár a my si s vami dohodneme osobné stratnutie
					</p>
					<form action="" method="POST">
				    	<div class="form-group">
				        	<input class="form-control bg-light text-center" type="text" name="first_name" placeholder="Vaše meno *" value="<?=  $first_name ?>">
				          	<span class="error"><?= $first_name_error ?></span>
				        </div>

				        <div class="form-group">
				          	<input class="form-control bg-light text-center" type="text" name="last_name" placeholder="Vaše priezvisko *" value="<?=  $last_name ?>">
				          	<span class="error"><?= $last_name_error ?></span>
				        </div>

				        <div class="form-group form-group-lg">
				          	<input class="form-control bg-light text-center" type="text" name="email" placeholder="Vaša e-mailová adresa *" value="<?=  $email ?>">
				          	<span class="error"><?= $email_error ?></span>
				        </div>

				        <div class="form-group form-group-lg">
				        	<input class="form-control bg-light text-center" type="text" name="telephone" placeholder="Mobilný telefón / kde Vás zastihneme *" value="<?=  $telephone ?>">
				          	<span class="error"><?= $telephone_error ?></span>
				        </div>

				        <div class="checkbox mt-4 mb-4">
				        	<label>
				            	<input type="checkbox" name="chBox">
				            	Súhlas so spracovaním osobných údajov *
				          	</label>
				          	<div class="error"><?= $chBox_error ?></div>
				          	<div class="success"><?= $success ?></div>
				        </div>

				        <input id="lBtn" class="btn btn-primary text-uppercase py-3 px-5" type="submit" name="submit" value="Mám záujem">
      				</form>
				</div>
				<!-- CONTACT FORM END-->

				<div class="col-lg-4 col-md-12">
					<h4 class="mb-4">Kontakt</h4>
					<ul class="m-0 p-0" >
						<li class="list-item">
							<i class="fas fa-phone-volume"></i>
							<a id="phone" href="tel:02/44455555">02/ 444 55 555</a>
						</li>
						<li class="list-item">
							<i class="fas fa-at"></i>
							<a id="email" href="mailto:byvanie@borybyvanie.sk">byvanie@bory.sk</a>
						</li>
					</ul>
					<div id="bandf" class="mt-3 d-inline-block " >
						<a class="pr-3" href="#"><img src="img/B.png" alt=""></a>
						<a class="pl-3" href="#"><img src="img/F.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>

		<!-- UNDER LINE START -->
		<div class="wrapper bg-light text-center">
			<hr>
			<div class="container pb-3">
				<div class="row">
					<div class="col-lg-4 col-md-12 mt-3">
						<h4 id="copy">&copy; 2017 All rights reserved by PENTA REAL ESTATE</h4>
					</div>
					<div class="col-lg-4 col-md-12">
						<img src="img/penta.png">
					</div>
					<div class="col-lg-4 col-md-12 mt-2">
						<div class="row">
							<div class="col col-md-3">
								<a href="#">
									<img src="img/p.png" alt="">
								</a>
							</div>
							<div class="col col-md-6">
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a href="#">
									<i class="fab fa-instagram"></i>
								</a>
								<a href="#">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</div>
							<div class="col col-md-3 pt-1">
								<a id="cok" href="#">COOKIES</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- FOOTER END-->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
