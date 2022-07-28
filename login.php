<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
	  <div class="container py-4 border" style="margin-top: 15%; width: 300px;">
	  <img src="assets/img/logotipo.png" style="margin-bottom: 5%;" width="100%" height="10%">
		<form action="ldap.php" method="POST">
			<div class="form-group">
			  <label for="">Usuario</label>
			  <input type="text" id="input" class="form-control" name="Usuario">
			</div>
			<div class="form-group">
			  <label for="">Senha</label>
			  <input type="password" id="pasw" class="form-control" name="Senha">
			</div>
			<button type="submit" class="btn btn-primary" id="botao">Submit</button>
		</form>
	  </div>
	<!-- Optional JavaScript -->
	
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/app.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>