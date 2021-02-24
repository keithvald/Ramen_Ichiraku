<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device_width, initial-scale=1.0, user-scalable=no">
	<title>Ramen Ichiraku</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
<!-- NAVIGATION-->
	<nav class="navbar navbar-expand-lg">
	  <a class="navbar-brand" href="#">Ramen Ichiraku</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item mr-3 active">
	        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Features</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Pricing</a>
	      </li>
	    </ul>
	  </div>
	</nav>



<!-- ELEMENTS DU TABLEAU-->
	<?php require 'pages/first.php' ;?>
	<?php require 'pages/second.php' ;?>
	<?php require 'pages/third.php' ;?>
	<?php require 'pages/fourth.php' ;?>
<!-- TABLEAU-->
	<table class="container mt-5 table table-striped">
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>Le nombre de flash au cours du mois</td>
	      <td><?php echo "$first"?></td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td>Le nom de la table la plus flashée</td>
	      <td><?php echo "$second"?></td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td>La langue la plus parlée par les touristes</td>
	      <td><?php echo "$third"?></td>
	    </tr>
	   	<tr>
	      <th scope="row">4</th>
	      <td>Le jour du plus grand nombre de visites</td>
	      <td><?php echo "$fourth" ?></td>
	    </tr>
	  </tbody>
	</table>

</body>
</html>
