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




<!-- form here -->

    <section class="registration-form" style="margin: 10% 0%;padding:0 10%;" >
        
        <div class="media-block theme-bg-light" style="border-radius: 10px; padding:0 10%;">
			<div class=" row justify-content-evenly">
				<h4 class="text-center mb-3">Registration</h4>

                <!-- php code to submit the form -->
                <div class="payment-details col-md-4 col-sm-12 text-black alert alert-primary" role="alert">
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

                <form action="registration-form.php" class="col-md-8 col-sm-12" method="POST" >
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
                    <!-- ocuupation as student or working Professional-->
                    <div class="form-group form-floating">
                        <select class="form-control" id="Occupation" name="Occupation">
                            <option value="Student">Student</option>
                            <option value="Working Professional">Working Professional</option>
                        </select>
                        <label for="Occupation">Occupation</label>
                    </div>
                    <!-- Organisation -->
                    <div class="form-group form-floating">
                        <input type="text" class="form-control" id="Organisation" name="Organisation" placeholder="Organisation" required>
                        <label for="Organisation">Institute/Organisation</label>
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
                    <!-- proof upload -->
                    <div class="form-group form-floating">
                        <input type="file" class="form-control" id="Proof" name="Proof" placeholder="Proof" required>
                        <label for="Proof">DOB Proof</label>
                    </div>
                    <!-- Reason -->
                    <div class="form-group form-floating">
                        <textarea class="form-control" id="Reason" name="Reason" placeholder="Reason"></textarea>
                        <label for="Reason">Why do you want to attend the Summit? (Short Note 2-3 lines)</label>
                    </div>
                    <!-- Registration Fees status -->
                    <div class="form-group form-floating">
                        <select class="form-control" id="RegistrationFees" name="RegistrationFees">
                            <option value="Paid">Paid</option>
                            <option value="Not Paid">Not Paid</option>
                        </select>
                        <label for="RegistrationFees">Registration Fees</label>
                    </div>
                    <!-- transaction id -->
                    <div class="form-group form-floating">
                        <input type="number" class="form-control" id="TransactionID" name="TransactionID" placeholder="Transaction ID" required>
                        <label for="TransactionID">Transaction ID</label>
                    </div>
                    <!-- transaction date -->
                    <div class="form-group form-floating">
                        <input type="date" max="<?php echo date("Y-m-d"); ?>" class="form-control" id="TransactionDate" name="TransactionDate" placeholder="Transaction Date" required>
                        <label for="TransactionDate">Transaction Date</label>
                    </div>

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
                                Last date of registration is 15th September.
                                </li>
                                <li>
                                Registration will be on first come first serve basis. Registration will be closed at the discretion of the organizers.
                                </li>
                                <li>
                                All travel, accommodation etc. to be arranged by the attendee at their own cost. 
                                </li>
                                <li>
                                Registration fee is Rs 4500/- per person to be paid at the time of registration by online mode.
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
                                Registration is valid for attending the Creators Summit on 25th September 2022 at Vivanta, Guwahati. In case of any change in the date and venue same will be communicated to the registered attendees well in advance.
                                </li>
                                <li>
                                Final itinerary of the summit will be announced by 20th September 2022
                                </li>
                                <li>
                                G Plus will not be liable for any damage, financial or non financial loss to the attendees due to change in date, venue or cancellation of the summit for reasons beyond control of the management. In Case of cancellation of event 50% of the registration fee will be refunded within 30 days from the cancellation of the event. In case of reschedule payments will not be refunded
                                </li>
                                <li>
                                The event will be entirely or in part video recorded, photographed, televised and telecast live on social media. Attendees agrees to the same and allows the video footage, photograph or any other material to be used by G Plus or its partner organizations in the future as and when required.
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
                        $Occupation = $_POST['Occupation'] ?? '';
                        $Organization = $_POST['Organisation'] ?? '';
                        $Mobile =  $_POST['MobileNumber'] ?? '';
                        $Email = $_POST['Email'] ?? '';
                        $DOB = $_POST['DOB'] ?? '';
                        $Reason = $_POST['Reason'] ?? '';
                        $Fees = $_POST['RegistrationFees'] ?? '';
                        $TransactionID = $_POST['TransactionID'] ?? '';
                        $TransactionDate = $_POST['TransactionDate'] ?? '';

                        // sql code to insert the data into the database


                        $sql = "INSERT INTO `registration` (`Name`, `PresentAddress`, `PermanentAddress`, `Occupation`, `Organization`, `Mobile`, `Email`, `DOB`, `Reason`, `FeeStatus`, `TransactionID`, `TransactionDate`) VALUES ('$Name', '$PresentAddress', '$PermanentAddress', '$Occupation', '$Organization', '$Mobile', '$Email', '$DOB', '$Reason', '$Fees', '$TransactionID', '$TransactionDate')";
                        echo $sql;
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

