<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>Creators Summit 2022</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Creator Summit 2022">
	<meta name="author" content="Chetan Chinchulkar">    
	<link rel="shortcut icon" href="favicon.ico"> 
	
	<!-- Google Font -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	
	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/theme.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

</head> 

<style>

	@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

	* {
		font-family: 'Roboto Light', 'Roboto Medium', 'Roboto'
	}

	.bg{
		/* set background image hero-1 */
		width: 100vw;
		height: auto;
		background: url("assets/images/bg-1.jpg") no-repeat center center fixed;
	}
</style>

<body>    

<!-- include nav.php -->
<div class="bg">

	<?php include 'nav.php'; ?>
	
	<?php include 'carousel.php'; ?>
</div>
	
	<?php include 'about.php'; ?>
	
	<?php include 'expect.php'; ?>

	<?php include 'session.php'; ?>

	<?php include 'awards.php'; ?>
	
	<?php include 'winners.php'; ?>

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<!-- Javascript -->          
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
	<script src="assets/plugins/smoothscroll.min.js"></script>
	<script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
	<script src="assets/js/main.js"></script>  


</body>
</html> 

