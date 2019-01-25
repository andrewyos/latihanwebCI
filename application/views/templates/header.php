<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/') . 'style.css' ?>">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text" rel="stylesheet">

	<title>
		<?= $title ?>
	</title>
  <style>
  
  </style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand ukHuruf" href="<?= base_url('Buku/home')?>">Toko  Buku</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav jarakKiri">
				<a class="nav-item nav-link mr-2" href="">Home</a>
				<a class="nav-item nav-link active mr-2" href="<?= base_url('Buku/index')?>">Buku<span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="<?= base_url('Login/logout') ?>">Logout</a>
			</div>
		</div>
	</nav>
