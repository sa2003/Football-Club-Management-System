<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="About the site"/>
    <meta name="author" content="Author name"/>
    <title> FCMS </title>

    <!--- core css -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/animate.min.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet"/>
</head> 

<body>
    <section id="header">
        <div class="row">
            <div class="col-md-10" style="text-align: right"> Football Club Management System </div>
        </div>
    </section>

    <section id="section1">
        <div class="title"> All Sponsors List </div>
        <div style="margin: left 10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
            <div class="row" style="padding:5px;">
                <div class="col-md-2"> SponsorID </div>
                <div class="col-md-2"> Name </div>
                <div class="col-md-2"> Contact Details </div>
            </div>

            <?php
            require_once("db_connection.php");
            $sql = "SELECT * FROM sponsor";
            $result = mysqli_query($conn, $sql);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="row" style="padding:50px;">
                <div class="col-md-2"> <?php echo $row['SponsorID']; ?> </div>
                <div class="col-md-2"> <?php echo $row['Name']; ?> </div>
                <div class="col-md-2"> <?php echo $row['ContactDetails']; ?> </div>
                <!-- Inside the loop that displays sponsor information -->
                <a href="delete_sponsor.php?sponsorID=<?php echo $row['SponsorID']; ?>" onclick="return confirm('Are you sure you want to delete this sponsor?')">Delete</a>
                <!-- Inside the loop that displays sponsor information -->
                <a href="update_sponsor.php?sponsorID=<?php echo $row['SponsorID']; ?>">Update</a>
            </div>
            <?php  
                }
            }
            ?>
        </div>
    </section>
    <div style="margin: left 10%; margin-right:10%; margin-top:20px; margin-bottom:20px;text-align:center;">
        <a href="add_sponsor.php" class="btn btn-primary">Add Sponsor</a>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

