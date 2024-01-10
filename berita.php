<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>App Admin</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<style>
		body {
			display: flex;
			flex-direction: column;
			min-height: 100vh;
		}

		.container {
			flex: 1;
		}
	</style>
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d9d9d9;">
		<a class="navbar-brand" href="#">App Admin</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="user.php">User</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="berita.php">Berita</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Content -->
	<div class="container mt-5">
		<h2>Berita</h2>

		<!-- Daftar berita -->
		<div class="card-deck mt-3">
			<!-- Kartu berita 1 -->
			<div class="card rounded-top">
				<img src="https://source.unsplash.com/300x200?coffee" class="card-img-top" alt="Gambar Berita 1">
				<div class="card-body">
					<h5 class="card-title">Coffe Break</h5>
					<p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium ad assumenda qui dolorem a. Exercitationem esse iste numquam illo voluptatem.</p>
					<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
				</div>
			</div>

			<!-- Kartu berita 2 -->
			<div class="card rounded-top">
				<img src="https://source.unsplash.com/300x200?zoo" class="card-img-top" alt="Gambar Berita 2">
				<div class="card-body">
					<h5 class="card-title">Kebun Binatang</h5>
					<p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure totam corporis quaerat repudiandae obcaecati atque, dolores aliquid autem inventore tempore!</p>
					<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
				</div>
			</div>

			<!-- Kartu berita 3 -->
			<div class="card rounded-top">
				<img src="https://source.unsplash.com/300x200?palestina" class="card-img-top" alt="Gambar Berita 3">
				<div class="card-body">
					<h5 class="card-title">Kami Bersama Palestina</h5>
					<p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi ipsa iste tempore voluptate id fuga, libero facere rerum dicta autem?</p>
					<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="bg-dark text-light text-center py-3">
		<p>&copy; <?php echo date('Y'); ?> App Admin. All rights reserved.</p>
	</footer>

	<!-- Bootstrap JS and jQuery (order matters) -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>