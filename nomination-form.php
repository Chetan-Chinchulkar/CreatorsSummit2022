<?php
session_start();

include 'db-connect.php';

?>


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
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800|Roboto:300,400,700&display=swap" rel="stylesheet">
	
	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/theme.css">



</head> 

<style>
    .form-group{
        margin: 20px 0 !important;
    }
</style>

<body>    

<!-- include nav.php -->
	<?php include 'nav.php'; ?>

<!-- form here -->

    <section class="nomination-form" style="margin: 10% 20%;padding:0 10%;" >
        
        <div class="media-block theme-bg-light py-5" style="border-radius: 10px; padding:0 10%;">
			<div class="container">
				<h4 class="text-center mb-3">Nomination</h4>

                <form action="nomination-form.php" >
                    
                    <div class="form-group form-floating">
                        <input type="text" class="form-control" id="Name" placeholder="Name">
                        <label for="Name">Name</label>
                    </div>
                    <!-- present address -->
                    <div class="form-group form-floating">
                        <input type="text" class="form-control" id="PresentAddress" placeholder="Present Address">
                        <label for="PresentAddress">Present Address</label>
                    </div>
                    <!-- permanent address with option of same as present address -->
                    <div class="form-group form-floating">
                        <input type="text" class="form-control" id="PermanentAddress" placeholder="Permanent Address">
                        <label for="PermanentAddress">Permanent Address</label>
                    </div>
                    <!-- mobile bumber -->
                    <div class="form-group form-floating">
                        <input type="text" class="form-control" id="MobileNumber" placeholder="Mobile Number">
                        <label for="MobileNumber">Mobile Number</label>
                    </div>
                    <!-- email -->
                    <div class="form-group form-floating is-invalid">
                        <input type="email" class="form-control" id="Email" placeholder="Email">
                        <label for="Email">Email</label>
                    </div>
                    <!-- DOB -->
                    <div class="form-group form-floating">
                        <input type="date" max="<?php echo date("Y-m-d"); ?>" class="form-control" id="DOB" placeholder="DOB">
                        <label for="DOB">DOB</label>
                    </div>
                    <!-- Gender Dropdown with Male, Female and Other option -->
                    <select class="form-select" name="Gender" id="Gender">
                        <option selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                        <label for="floatingSelect">Select Gender</label>
                    </select>
                    <!-- creating Content since  -->
                    <div class="form-group form-floating">
                        <!-- input year -->
                        <input type="number"  max="2022" class="form-control" id="CreatingSince" placeholder="Creating Since">
                        <label for="CreatingSince">Creating Content Since</label>
                    </div>
                    <!-- Content category select -->
                    <select class="form-select" name="ContentCategory" id="ContentCategory">
                        <option selected>Select Content Category</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Education">Education</option>
                        <option value="Technology">Technology</option>
                        <option value="Health & Fitness">Health & Fitness</option>
                        <option value="Social Impact">Social Impact</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Food">Food</option>
                        <option value="Travel">Travel</option>
                        <option value="">Others</option>
                        <label for="floatingSelect">Select Content Category</label>
                    </select>
                    
                </form>
            </div>
        </div>
</section>

	<!-- include footer.php -->
	<?php include 'footer.php'; ?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<!-- Javascript -->          
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
	<script src="assets/plugins/smoothscroll.min.js"></script>
	<script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
	<script src="assets/js/main.js"></script>  


</body>
</html> 

