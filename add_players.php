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
            <div class="col-md-2" style="font-size: 30px:color:#FFFF;"> Football Club Management System</div>
                
        

        <section id = "section1">
            <div class="title"> Add a Player</div>

            <form action="insert_player.php" class="form_design" method="post">
                PlayerID: <input type="text" name="pid"> <br/>
                Name: <input type="text" name="pname"> <br/> 
                Age: <input type="text" name="page"> <br/>
                Position: <input type="text" name="ppos"> <br/>
                JerseyNumber: <input type="text" name="pjn"> <br/>
                Salary: <input type="text" name="psalary"> <br/>
                Nationality: <input type="text" name="pnation"> <br/>
                Number: <input type="text" name="pnumber"> <br/>
                HeadCoachID: <input type="text" name="phc"> <br/>
                <br/>
                <input type="submit" value="Add to Database">
            </form>
        </section>


    
        </section>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/wow.min.js"></script>
    </body>
</html>

