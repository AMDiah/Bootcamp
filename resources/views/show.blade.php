<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Bootcamp4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
	
	@include('layouts.navbar')
  <body>
    <section>
        <div class="container mt-3">
			<div class="row">
				<div class="col-md-6 mx-auto">
					
					<form action="" method="POST">
						@csrf
						@method('PUT')
						<div class="mb-3">
							<label for="nama" class="form-label">Nama Game</label>
							<input type="text" class="form-control" id="nama" name="nama" required>
						</div>
						<div class="mb-3">
							<label for="deskripsi" class="form-label">Deskripsi Game</label>
							<input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Update</button>
					</form>
				</div>
			</div>
		</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

