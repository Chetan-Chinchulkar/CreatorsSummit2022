<?php
session_start();

include 'db-connect.php';
include 'bank-details.php';

// echo $conn;

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
    .payment-details{
        /* background-color: yellow; */
        height: fit-content;
    }   
</style>

<body>    

<!-- include nav.php -->
<?php include 'nav.php'; ?>


<!-- form here -->

    <section class="nomination-form" style="margin: 10% 20%;padding:0 0%;" >
        
        <div class="media-block theme-bg-light" style="border-radius: 10px; padding:0 0%;">
			<div class="row justify-content-evenly">
				<h4 class="text-center mb-3">Nomination</h4>

                <div class="payment-details col-md-4 text-black alert alert-primary" role="alert">
                    Payment to be made by online Payment in favour of the following account
                    <br>
                    Account Holder Name: <?php echo $account ;?>
                    <br>
                    Bank Name: <?php echo $bank ;?>
                    <br>
                    A/C Number: <?php echo $accountNumber ;?>
                    <br>
                    IFSC: <?php echo $IFSC ;?>
                    <br>
                    Type of Account: <?php echo $accountType ;?>
                    <br>
                </div>

                <form action="nomination-form.php" class="col-md-8" method="POST" >
                    <!-- Name -->
                    <div class="form-group form-floating" data-validation="required">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        <label for="name">Name</label>
                    </div>

                    <!-- present address -->
                    <div class="form-group form-floating">
                        <input type="text" class="form-control" id="PresentAddress" name="PresentAddress" placeholder="Present Address" required>
                        <label for="PresentAddress">Present Address</label>
                    </div>
                    <!-- permanent address with option of same as present address -->
                    <div class="form-group form-floating">
                        <input type="text" class="form-control" id="PermanentAddress" name="PermanentAddress" placeholder="Permanent Address" required>
                        <label for="PermanentAddress">Permanent Address</label>
                        <!-- input for same as present address -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="sameAsPresent" onclick="FillAddressInput()">
                            <label class="form-check-label" for="sameAsPresent">Same as Present Address</label>
                        </div>
                    </div>
                    <!-- mobile bumber -->
                    <div class="form-group form-floating">
                        <input type="number" maxlength="10" class="form-control" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number" required>
                        <label for="MobileNumber">Mobile Number</label>
                    </div>
                    <!-- email -->
                    <div class="form-group form-floating is-invalid">
                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required>
                        <label for="Email">Email</label>
                    </div>
                    <!-- DOB -->
                    <div class="form-group form-floating">
                        <input type="date" max="<?php echo date("Y-m-d"); ?>" class="form-control" id="DOB" name="DOB" placeholder="DOB" required>
                        <label for="DOB">DOB</label>
                    </div>
                    <!-- Gender Dropdown with Male, Female and Other option -->
                    <select class="form-group form-select" name="Gender" id="Gender">
                        <option selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                        <label for="floatingSelect">Select Gender</label>
                    </select>
                    <!-- creating Content since  -->
                    <div class="form-group form-floating">
                        <!-- input year -->
                        <input type="number"  max="2022" class="form-control" id="CreatingSince" name="CreatingSince" placeholder="Creating Since" required>
                        <label for="CreatingSince">Creating Content Since</label>
                    </div>
                    <!-- Content category select -->
                    <select class="form-group form-select" name="ContentCategory" id="ContentCategory">
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
                    
                    <!-- primary platform -->
                    <select class="form-group form-select" name="PrimaryPlatform" id="PrimaryPlatform">
                        <option selected>Select Primary Platform</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Twitter">Twitter</option>
                        <option value="YouTube">YouTube</option>
                        <option value="Others">Others</option>
                        <label for="floatingSelect">Select Primary Platform</label>
                    </select>

                    <!-- primary platform link -->
                    <div class="form-group form-floating">
                        <input type="text" class="form-control" id="PrimaryPlatformLink" name="PrimaryPlatformLink" placeholder="Primary Platform Link" required>
                        <label for="PrimaryPlatformLink">Primary Platform Link</label>
                    </div>

                    <!-- category of social media influencer -->
                    <select class="form-group form-select" name="SocialMediaCategory" id="SocialMediaCategory">
                        <option selected>Select Social Media Category</option>
                        <option value="Micro Influencer">MicroInfluencer : 10k - 50k</option>
                        <option value="Macro Influencer">MacroInfluencer : 50k - 500k</option>
                        <option value="Large Influencer">Large Influencer : 500k - 1M</option>
                        <option value="Mega Influencer">Mega Influencer : 1M - 5M</option>
                        <option value="Celebrity">Celebrity : 5M+</option>
                        <label for="floatingSelect">Select Social Media Category</label>
                    </select>

                    <!-- secondary platform -->
                    <select class="form-group form-select" name="SecondaryPlatform" id="SecondaryPlatform">
                        <option selected>Select Secondary Platform</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Twitter">Twitter</option>
                        <option value="YouTube">YouTube</option>
                        <option value="Others">Others</option>
                        <label for="floatingSelect">Select Secondary Platform</label>
                    </select>

                    <!-- secondary platform link -->
                    <div class="form-group form-floating">
                        <input type="text" class="form-control" id="SecondaryPlatformLink" name="SecondaryPlatformLink" placeholder="Secondary Platform Link" required>
                        <label for="SecondaryPlatformLink">Secondary Platform Link</label>
                    </div>

                    <!-- profile pdf upload -->
                    <div class="form-group form-floating">
                        <input type="file" class="form-control" id="Profile" name="Profile" placeholder="Profile" required>
                        <label for="Profile">Profile PDF</label>
                    </div>

                    <!-- where did you hear about us -->
                    <select class="form-group form-select" name="HeardAboutUs" id="HeardAboutUs">
                        <option selected>Select Where Did You Hear About Us</option>
                        <option value="Social Media">Social Media</option>
                        <option value="Word of Mouth">Word of Mouth</option>
                        <option value="Digital Advertisement">Digital Advertisement</option>
                        <option value="News Paper">News Paper</option>
                        <option value="Others">Others (Please Specify)</option>
                        <label for="floatingSelect">Select Where Did You Hear About Us</label>
                    </select>

                    <!-- button to display terms -->
                    <div class="form-check" >
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required required>
                        <label class="form-check-label" for="invalidCheck2">
                            Agree to terms and conditions
                        </label>
                    </div>

                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Terms and Conditions</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <ol>
                                <li>
                                Only permanent residents of Assam can submit their nominations for the contest.
                                </li>
                                <li>
                                Content creator must be active in any 1 platform – Facebook, Instagram, Youtube or Twitter for at least 1 year as on 1st September 2022
                                </li>
                                <li>
                                All content posted by the creator must be his own and original, apart from the paid partnerships.
                                </li>
                                <li>
                                Once submitted, the entry will be final.
                                </li>
                                <li>
                                A content creator can nominate themselves in maximum 3 categories.
                                </li>
                                <li>
                                    Nomination fee is Rs 3000/- for the 1st category and 1000/- for subsequent categories. 
                                </li>
                                <li>
                                    Payment to be made by online Payment in favour of the following account
                                    <br>
                                    Account Holder Name: <?php echo $account ;?>
                                    <br>
                                    Bank Name: <?php echo $bank ;?>
                                    <br>
                                    A/C Number: <?php echo $accountNumber ;?>
                                    <br>
                                    IFSC: <?php echo $IFSC ;?>
                                    <br>
                                    Type of Account: <?php echo $accountType ;?>
                                    <br>
                                </li>
                                <li>
                                    Payment once made are non-refundable.
                                </li>
                                <li>
                                    Last Date of submission of nominations is 30thAugust 2022.
                                </li>
                                <li>
                                    No submission will be accepted after the last date.
                                </li>
                                <li>
                                The shortlisted content creators will be notified by Phone/Email by 10th September 2022.
                                </li>
                                <li>
                                    Winners will be selected by a specialized jury panelbased on different parameters - but not limited to- quality of content (weightage 50%), posts frequency (weightage 20%), engagement rate (weightage 10%), reach (weightage 10%) etc.
                                <li>
                                <li>
                                    Shortlisted content creators will be required to create 1 content on a given theme which might include product or services offered by sponsors of the Creators Summit 2022. These content need not be posted online. Will be for internal evaluation only. 
                                </li>
                                <li>
                                    Participating content creators will be invited to the G Plus Creators Summit 2022, to be hosted in Guwahati in the month of September. Travel, accommodations etc. to attend the summit will need to be arranged by the participants at their own cost. 
                                </li>
                                <li>
                                    Final Date, Time, Itinerary will be announced atleast 5 days prior to the event. 
                                </li>
                                <li>
                                    For each category to be valid, at least 3 nominations are required to select a winner. If less than 3 nominations received for any category the respective category will be cancelled.
                                </li>
                                <li>
                                    In case of any category is cancelled the participants will be moved to any other suitable category or the registration fee paid for that category will be refunded within 30 days from the competition of the summit. The organisers decision will be final in this regards. 
                                </li>
                                <li>
                                    Decision of the jury appointed will be final and cannot be challenged. 
                                </li>
                                <li>
                                G Plus will not be liable for any damage, financial or non financial loss to the attendees due to change in date, venue or cancellation of the summit for reasons beyond control of the management.
                                </li>
                                <li>
                                    The event will be entirely or in part video recorded, photographed, televised and telecast live on social media. Attendees agree to the same and allow the video footage, photograph or any other material to be used by G Plus or its partner organizations in the future as and when required. 
                                </li>
                            </ol>
                        
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- submit button -->
                    <div class="row justify-content-evenly">
                        <button type="button" class="col-md-5 btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Terms and Conditions
                        </button>
                        <button type="submit" name="Submit" id="Submit" class="col-md-5 btn btn-primary">Submit</button>

                    </div>



                    <?php
                    if(isset($_POST['Submit'])){
                        $Name = $_POST['name'] ?? '';
                        $PresentAddress = $_POST['PresentAddress'] ?? '';
                        $PermanentAddress = $_POST['PermanentAddress'] ?? '';
                        $Mobile =  $_POST['MobileNumber'] ?? '';
                        $Email = $_POST['Email'] ?? '';
                        $DOB = $_POST['DOB'] ?? '';
                        $Gender = $_POST['Gender'] ?? '';
                        $ContentSince = $_POST['CreatingSince'] ?? '';
                        $ContentCategory = $_POST['ContentCategory'] ?? '';
                        $PrimaryPlatform = $_POST['PrimaryPlatform'] ?? '';
                        $PrimaryPlatformLink = $_POST['PrimaryPlatformLink'] ?? '';
                        $SocialMediaCategory = $_POST['SocialMediaCategory'] ?? '';
                        $SecondaryPlatform = $_POST['SecondaryPlatform'] ?? '';
                        $SecondaryPlatformLink = $_POST['SecondaryPlatformLink'] ?? '';
                        $Profile = $_POST['Profile'] ?? '';
                        $HeardAboutUs = $_POST['HeardAboutUs'] ?? '';

                        // sql code to insert the data into the database


                        $sql = "INSERT INTO `Nomination` 
                        (`Name`, `PresentAddress`, `PermanentAddress`,`Mobile`, `Email`, `DOB`, `Gender`, `CreatingContentSince`, `ContentCategory`, `PrimaryPlatform`, `CategorySocialMedia`, `PrimaryLink`, `SecondaryPlatform`, `SecondaryLink`, `Profile`, `Reach`) 
                        VALUES 
                        ('$Name', '$PresentAddress', '$PermanentAddress', '$Mobile', '$Email', '$DOB', '$Gender', '$ContentSince', '$ContentCategory', '$PrimaryPlatform', '$SocialMediaCategory', '$PrimaryPlatformLink', '$SecondaryPlatform', '$SecondaryPlatformLink', '$Profile', '$HeardAboutUs');";
                        // echo $sql;
                        $result = mysqli_query($conn, $sql);
                        // echo "hi3";

                        if($result){
                            echo "<script>alert('Nomination Submitted Successfully')</script>";


                            echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
                        }
                        else{
                            echo "<script>alert('Nomination Not Submitted')</script>";
                        }


                    }
                ?>

                </form>

               
            </div>
        </div>
</section>

	<!-- include footer.php -->
	<?php include 'footer.php'; ?>


    <script type="text/javascript">
        // if clicked on same as present address, then put same data in permanent address field
        // $(document).ready(function(){
        //     $("#sameAsPresentAddress").click(function(){
        //         if($(this).is(":checked")){
        //             $("#PermanentAddress").val($("#PresentAddress").val());
        //         }
        //         else{
        //             $("#PermanentAddress").val("");
        //         }
        //     });
        // });


    function FillAddressInput()
        {
            let checkBox= document.getElementById('sameAsPresent');

            let pAddressLine = document.getElementById("PermanentAddress");

            let curAddressLine = document.getElementById("PresentAddress");

            if (checkBox.checked == true)
            {
            
             pAddressLine.value = curAddressLine.value;    

        }
        else
        {
            pAddressLine.value = "";       
        }
    }


    </script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<!-- Javascript -->          
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
	<script src="assets/plugins/smoothscroll.min.js"></script>
	<script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
	<script src="assets/js/main.js"></script>  


</body>
</html> 

