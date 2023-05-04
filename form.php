<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>form</title>
</head>
<body>
<div class="container">
		<h1 class="mt-3 mb-5">Form di invio con Bootstrap</h1>
		<form method="post" action="censura.php">
			<div class="form-group">
				<label for="paragrafo">Inserisci un paragrafo:</label>
				<textarea class="form-control" name="paragrafo" id="paragrafo" rows="4"></textarea>
			</div>
			<div class="form-group mb-2">
				<label for="parola">Inserisci la parola da censurare:</label>
				<input class="form-control" type="text" name="parola" id="parola">
			</div>
			<button type="submit" class="btn btn-primary">Invia</button>
		</form>
	</div>
</body>
</html>