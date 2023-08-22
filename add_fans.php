<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="About the site"/>
    <meta name="author" content="Author name"/>
    <title>FCMS - Add a Fan</title>

    <!-- Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/animate.min.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet"/>
</head>
<body>
    <section id="header">
        <div class="row">
            <div class="col-md-2" style="font-size: 30px; color:#FFFF;">Football Club Management System</div>
        </div>
    </section>

    <section id="section1">
        <div class="title">Add a Fan</div>

        <form action="insert_fans.php" class="form_design" method="post">
            FanNumber: <input type="text" name="fannumber"> <br/>
            FanClub: <input type="text" name="fanclub"> <br/>
            ClubID: <input type="text" name="clubid"> <br/> <!-- Update name here -->
            <br/>
            <input type="submit" value="Add to Database">
        </form>
    </section>

    <!-- Include necessary JavaScript scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
