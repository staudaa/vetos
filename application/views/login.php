<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">

	<title><?= $title ?></title>
</head>

<body>

	<nav class="navdaa navbar navbar-expand-lg navbar-dark">
		<div class="container">
			<a class="navbar-brand" href="#">
				<h3>v<b>E</b>tos</h3>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>



	<div class="content d-flex align-items-center mt-5">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6">
					<div class="card rouonded border border-danger">
						<div class="card-title">
							<div class="border-bottom border-danger ">
								<h3 class="text-center mt-3">Login v<b>E</b>tos</h3>
							</div>
						</div>
						<div class="card-body">
							<?= $this->session->flashdata('message'); ?>
							<form action="<?= site_url('auth/process') ?>" method="post">
								<div class="form-group mb-3">
									<label for="username"><b>Username *</b></label>
									<input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username">
									<div class="text-danger"><?php echo form_error('username'); ?></div>
								</div>
								<div class="form-group mb-3">
									<label for="password"><b>Password *</b></label>
									<input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password">
									<div class="text-danger"><?php echo form_error('password'); ?></div>
								</div>
								<div class="form-group" align="center">
									<button type="submit" name="login" class="btn btn-danger">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>