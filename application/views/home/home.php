<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url('assets/') . 'style.css' ?>">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
	 crossorigin="anonymous">
	<style>
		.full {
			background-image: url(<?= base_url('assets/aku.jpg') ?>);
			height: 100vh;
			width: 100%;
			background-attachment: fixed;
			background-size: cover;
		}

		.kotak2 {
			margin-top: 10vh;
			color: aliceblue;
			text-shadow: 10px 10px 10px 10px black !important;
			font-family: 'Fredoka One', cursive;
			letter-spacing: 1vh font: outline;
		}

		.kotak2 h1 {
			font-size: 15vh;
			color: antiquewhite;
		}

		.kotak1 a {
			margin-top: 30vh;
			font-weight: bold !important;
		}

		.back {
			height: 70vh;
			padding-top: 17.5%;
			margin-bottom: 17.5%;
    }
    
    .belakang{
      background-image: url(<?= base_url('assets/po.jpg') ?>);
      background-size: cover;
      height: 110vh;
	}

	</style>
</head>

<body>
	<div class="container-fluid full" id="home">
		<div class="row">
			<div class="col-12 text-center kotak1">
				<a href="<?=base_url('Buku/index') ?>" class="btn btn-info" style="font-size: 4vh;">GETTING STARTED<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
		<div class="row">
			<div class="col-12 kotak2 text-center">
				<h1>WELC <i class="fas fa-igloo" style="color:antiquewhite;"></i> ME</span></h1>
			</div>
		</div>

  </div>
	<div class="container-fluid belakang">
		<div class="row back">
			<div class="col-md-4 mb-3 mb-md-0">
				<div class="card py-4 h-100">
					<div class="card-body text-center">
						<i class="fas fa-map-marked-alt text-primary mb-2"></i>
						<h4 class="text-uppercase m-0">Address</h4>
						<hr class="my-4">
						<div class="small text-black-50">Danau Paniai Terusan Street, Malang, East Java</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 mb-3 mb-md-0">
				<div class="card py-4 h-100">
					<div class="card-body text-center">
						<i class="fas fa-envelope text-primary mb-2"></i>
						<h4 class="text-uppercase m-0">Email</h4>
						<hr class="my-4">
						<div class="small text-black-50">
							<a href="#">yosandresaputra@gmail.com</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 mb-3 mb-md-0">
				<div class="card py-4 h-100">
					<div class="card-body text-center">
						<i class="fas fa-mobile-alt text-primary mb-2"></i>
						<h4 class="text-uppercase m-0">Phone</h4>
						<hr class="my-4">
						<div class="small text-black-50">+62 821 4189 9381</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>
</body>

</html>
