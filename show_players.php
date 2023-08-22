<html lang="en">
    <head>
       <meta charset="utf-8"/>
       <meta name="viewport" content="width=device-width, initial-scale=1. 0"/>
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
                <div class="col-md-10" style="text-align: right"> Football CLub Management System <div>
                </div>
            </div>
        </section>
      
        <section id = "section1">
            <div class="title"> All Players List </div>
            <div style="margin: left 10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
            <div class="row" syle="padding:5px;">
                <div class="col-md-1"> PlayerID </div>
                <div class="col-md-1"> Name </div>
                <div class="col-md-1"> Age </div>
                <div class="col-md-1"> Position </div>
                <div class="col-md-1"> JerseyNumber </div>
                <div class="col-md-1"> Salary </div>
                <div class="col-md-1"> Nationality </div>
                <div class="col-md-1"> Number </div>
                <div class="col-md-1"> HeadCoachID </div>

            </div>

            <?php
            require_once("db_connection.php");
            $sql="SELECT * FROM player";
            $result=mysqli_query($conn, $sql);
            if($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                  
            ?>
            <div class="row" syle="padding:50px;">
                <div class="col-md-1"> <?php echo $row[0]; ?> </div>
                <div class="col-md-1"> <?php echo $row[1]; ?> </div>
                <div class="col-md-1"> <?php echo $row[2] ?> </div>
                <div class="col-md-1"> <?php echo $row[3] ?> </div>
                <div class="col-md-1"> <?php echo $row[4] ?> </div>
                <div class="col-md-1"> <?php echo $row[5] ?> </div>
                <div class="col-md-1"> <?php echo $row[6] ?> </div>
                <div class="col-md-1"> <?php echo $row[7] ?> </div>
                <div class="col-md-1"> <?php echo $row[8] ?> </div>
                    <!-- Inside the loop that displays player information in show_players.php -->
                      <a href="delete_player.php?playerID=<?php echo $row[0]; ?>" onclick="return confirm('Are you sure you want to delete this player?')">Delete</a>
                    <!-- Inside the loop that displays player information in show_players.php -->
                      <a href="update_players.php?playerID=<?php echo $row[0]; ?>">Update</a>

            </div>
            <?php  
                }
            }
            ?>
        </section>
        <div style="margin: left 10%; margin-right:10%; margin-top:20px; margin-bottom:20px;text-align:center;">
                <a href="add_players.php" class="btn btn-primary">Add Player</a>
        </div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/wow.min.js"></script>
    </body>
</html>

