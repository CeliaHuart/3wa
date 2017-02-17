<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>PHP exos correction</title>
	<!--Perso CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="result.php" />



</head>

<body>

<div class="container">
  <p><?= $_POST['nomslist']; ?> , Célia vous a écrit : <?= $_POST['commentaire']; ?> </p>
</div>



  <!-- Perso JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
