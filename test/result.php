<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>PHP exos correction</title>
	<!--Perso CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />



</head>

<body>
  <div class="container-fluid">


<?php /*
Pour les moteurs de recherches /!/ aucunes securité
<a href="result.php?prenom=celia&amp;pseudo=zouzou">voir le résultat du get</a>
<h1>Get</h1>
<p>
  Le pseudo est : <?= $_GET['pseudo']; ?>
  Le prenom est : <?= $_GET['prenom']; ?>
</p>
*/ ?>

<!-- Pour que les données soient confidentielles -->

<div><h1>Formulaire</h1></div>
<form action="result.php" method="post">
<div>
  <label class="largeur" for="nom">Nom :</label>
  <input type="text" name="nom" placeholder="Votre pseudo">
</div>

<div>
  <label class="largeur" for="prenom">Prenom :</label>
  <input type="text" name="prenom" placeholder="Votre prenom">
</div>

<div>
  <label class="largeur" for="age">Age :</label>
  <input type="text" name="age" placeholder="Votre age">
</div>

<div>
  <label class="largeur" for="ville">Ville :</label>
  <input type="text" name="ville" placeholder="Votre ville">
</div>

<div>
  <label class="largeur" for="cp">Code postal :</label>
  <input type="text" name="cp" placeholder="Votre postal">
</div>

</br>
<button type="submit" name="submit">Envoyer</button>
</form>


</br>
</br>


<div class="info">

<!-- INFOS RENTREES DANS LE FORM -->
<hr>
<h3>Vos informations personnelles</h3>
<p> Votre nom : <?= $_POST['nom']; ?> </p>
<p> Votre prenom : <?= $_POST['prenom']; ?> </p>
<p> Votre age : <?= $_POST['age']; ?> </p>
<p> Votre ville : <?= $_POST['ville']; ?> </p>
<p> Votre code postal : <?= $_POST['cp']; ?> </p>

<hr>
</div>



<!-- PARTIE CHAT -->
<div class="chat">
<form action="infos.php" class="form-group">
  <label for="listname">Choisissez une personne à clasher :</label>
<select type="text" class="form-control" name="nomslist">
  <option>Ruddy</option>
  <option>Lenny</option>
  <option>Christophe</option>
  <option>Romain</option>
  <option>Célia</option>
  <option>Ztein</option>
  <option>Hasmik</option>
  <option>Audrey</option>
  <option>Julien</option>
  <option>Nour</option>
  <option>Fred</option>
  <option>Guillaume</option>
  <option>Yorick</option>
  <option>Fatma</option>
  <option>JP</option>
</select>

<!-- PARTIE COMMENTAIRES -->
</br>
<textarea class="form-control" name="commentaire" rows="3" placeholder="Ecrivez votre commentaire"></textarea>
</br>
<button type="submit" name="submitComment">Envoyer</button>
</br>
</div>
</form>

</div>


<footer>
  <p>
  </br>
  .
  </br>
  </p>
</footer>



  <!-- Perso JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
