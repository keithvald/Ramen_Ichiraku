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
	<h1>Ramen Ichiraku</h1>  

	<?php require 'pages/first.php' ;?>
	<?php require 'pages/second.php' ;?>
	<?php require 'pages/third.php' ;?>
	<?php require 'pages/fourth.php' ;?>

	<table class="container table table-striped table-dark">
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
