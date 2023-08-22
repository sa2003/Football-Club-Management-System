
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
                
        

        <!-- ... (other HTML code) ... -->

        <section id="section1">
            <div class="title"> Add a Sponsor</div>

            <form action="insert_sponsor.php" class="form_design" method="post">
                SponsorID: <input type="text" name="sid"> <br/>
                Name: <input type="text" name="sname"> <br/> 
                ContactDetails: <input type="text" name="contactDetails"> <br/> <!-- Corrected input name -->
                <br/>
                <input type="submit" value="Add to Database">
            </form>
        </section>

<!-- ... (other HTML code) ... -->



    
        </section>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/wow.min.js"></script>
    </body>
</html>


