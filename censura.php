<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>censura</title>
</head>
<body>
<div class="container">
		<h1 class="mt-3 mb-5">Risultato della censura con Bootstrap</h1>
		<?php
			$paragrafo = $_POST['paragrafo'];
			$parola = $_POST['parola'];
			$paragrafo_censurato = str_ireplace($parola, '***', $paragrafo);
		?>
		<div class="card">
			<div class="card-body">
            <h5 class="card-title">Il tuo paragrafo originale:</h5>
			<p class="card-text"><?php echo $paragrafo; ?></p>
			<p class="card-text"><small class="text-muted">Lunghezza: <?php echo strlen($paragrafo); ?> caratteri</small></p>
		</div>
	</div>
	<div class="card mt-4">
		<div class="card-body">
			<h5 class="card-title">Il tuo paragrafo censurato:</h5>
			<p class="card-text"><?php echo $paragrafo_censurato; ?></p>
			<p class="card-text"><small class="text-muted">Lunghezza: <?php echo strlen($paragrafo_censurato); ?> caratteri</small></p>
		</div>
	</div>
</div>
</body>
</html>