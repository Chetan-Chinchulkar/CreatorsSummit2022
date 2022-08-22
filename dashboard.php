<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['usertype'])) {
    header("location: logout.php");
    exit;
}

include 'db-connect.php';


?>
<html>
    <head>
        <title>Dashboard</title>
        
        
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
    .registration-table ,.nomination-table{
        padding: 0 5vw;
    }
    .table-reg, .table-nom{
        /* boxshadow */
        box-shadow: 0 0 10px rgba(0,0,0,0.6);
        border-radius: 20px;
        padding: 20px 20px;

        /* scroll in y-direction */
        overflow-y: scroll;
        /* height: 30%; */
        
    }
    table{
        border-radius: 20px !important;
    }
    .header{
        background-color: #0C4369;
    }
</style>
<body>

<!-- include nav.php -->
<?php include 'nav.php'; ?>



<section class="registration-table mt-5 pt-5 mb-5 pb-5" id="registration-table">

    <div class="table-reg">

        <h1 class="text-center">Registrations</h1>

        <?php if ($_SESSION['usertype'] == 1) { ?>
                
            <?php

                $query = "SELECT * FROM Registration";
                $result = mysqli_query($conn, $query);

                // display data in table
                echo "<table class='table table-striped table-hover table-bordered'>
                    <tr>
                    <th>Name</th>
                    <th>Present Address</th>
                    <th>Permanent Address</th>
                    <th>Occupation</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Reason</th>
                    <th>FeeStatus</th>
                    <th>Transaction ID</th>
                    <th>Transaction Date</th>
                    </tr>";

                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['PresentAddress'] . "</td>";
                    echo "<td>" . $row['PermanentAddress'] . "</td>";
                    echo "<td>" . $row['Occupation'] . "</td>";
                    echo "<td><a href=Tel:".$row['Mobile'].">" . $row['Mobile'] . "</a></td>";
                    echo "<td><a href=mailto:".$row['Email'].">" . $row['Email'] . "</td>";
                    echo "<td>" . $row['DOB'] . "</td>";
                    echo "<td>" . $row['Reason'] . "</td>";
                    echo "<td>" . $row['FeeStatus'] . "</td>";
                    echo "<td>" . $row['TransactionID'] . "</td>";
                    echo "<td>" . $row['TransactionDate'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            ?>
        <?php } ?>
    </div>


</section>

<hr>


<section class="nomination-table mt-5 pt-5 mb-5 pb-5" id="nomination-table">

    <div class="table-nom">

        <h1 class="text-center">Nominations</h1>

        <?php if ($_SESSION['usertype'] == 1) { ?>
                
            <?php

                $query = "SELECT * FROM Nomination";
                $result = mysqli_query($conn, $query);

                // display data in table
                echo "<table class='table table-striped table-hover table-bordered'>
                    <tr>
                    <th>Name</th>
                    <th>Present Address</th>
                    <th>Permanent Address</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Creating Content Since</th>
                    <th>Content Category</th>
                    <th>Primary Platform</th>
                    <th>Category Social Media</th>
                    <th>Primary Link</th>
                    <th>Secondary Platform	</th>
                    <th>Secondary Link	</th>
                    <th>Profile	</th>
                    <th>Reach	</th>
                    </tr>";
                    
                    	
                    	
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['PresentAddress'] . "</td>";
                    echo "<td>" . $row['PermanentAddress'] . "</td>";
                    echo "<td><a href=Tel:".$row['Mobile'].">" . $row['Mobile'] . "</a></td>";
                    echo "<td><a href=mailto:".$row['Email'].">" . $row['Email'] . "</td>";
                    echo "<td>" . $row['DOB'] . "</td>";
                    echo "<td>" . $row['Gender'] . "</td>";
                    echo "<td>" . $row['CreatingContentSince'] . "</td>";
                    echo "<td>" . $row['ContentCategory'] . "</td>";
                    echo "<td>" . $row['PrimaryPlatform'] . "</td>";
                    echo "<td>" . $row['CategorySocialMedia'] . "</td>";
                    echo "<td>" . $row['PrimaryLink'] . "</td>";
                    echo "<td>" . $row['SecondaryPlatform'] . "</td>";
                    echo "<td>" . $row['SecondaryLink'] . "</td>";
                    echo "<td><a href=".$row['Profile'].">" . $row['Profile'] . "</a></td>";
                    echo "<td>" . $row['Reach'] . "</td>";

                    echo "</tr>";
                }

                echo "</table>";
            ?>
        <?php } ?>
    </div>


    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    </body>
    </html>