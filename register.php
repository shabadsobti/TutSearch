<?php

 include_once 'db.php';

if ( isset($_POST['register']) ) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
        $query = "INSERT INTO users(name,email,password, phone, subject) VALUES('".$name."','".$email."','".$password."', '".$phone."', '".$subject."')";
        $res = mysql_query($query);
    }

?>
    
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>TutSearch - One stop search for tutors </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/tutsearch.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">TutSearch</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About</a>
                    </li>

                    <li class="active">
                        <a href="contact.html">Contact</a>
                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Login/Register

                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Login/Register</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Contact Details Column -->
            <div class="col-md-5">
                <h3>Already a member? Log In.</h3>
                <br>
                <form name = "login" id = "login">
                    <label> Email:</label>
                    <input type="text" class="form-control" placeholder = "Email" id="email">
<br>
 <label> Password:</label>
                    <input type="password" class="form-control" placeholder = "Password" id="email">
                   <br>
<button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>



                        <div class="col-md-5">
                <h3>Register</h3>
                <br>
                <form name="form" id="form" method="post" action = <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
                    
                            <label>Full Name:</label>
                            <input type="text" class="form-control" placeholder = "Full Name" name="name">
                        
                            <label>Phone Number:</label>
                            <input type="text" class="form-control" placeholder = "Phone" name="phone">

       
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder = "Email" name="email">
        

       
                            <label>Password:</label>
                            <input type="password" class="form-control" placeholder = "Password" name="password">
            
                            <label>Subject:</label>
                            <input type="text" class="form-control" placeholder = "Subject" name="subject">

                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" id = "register" name = "register">Register</button>
                </form>
            </div>
        </div>
        <!-- /.row -->



        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; tutSearch 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>