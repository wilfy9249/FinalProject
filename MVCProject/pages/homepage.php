<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <!--<link rel="stylesheet" href="css/styles.css?v=1.0">-->

    <!--[if lt IE 9]>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <![endif]-->
</head>

<body>


<!--<h1>
   <?php

    //this how to print some data;
    echo $data['site_name'];

    ?> </h1>-->

<!--<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>-->

<form action="index.php?page=accounts&action=login" method="POST">

    <!--<div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>-->

    <div class="wrapper">
        <div class="inner-warpper text-center">
            <h2 class="title">Login to your account</h2>
            <form action="" id="formvalidate">
                <div class="input-group">
                    <label class="palceholder" for="userName" >User Name</label>
                    <input class="form-control" name="email" id="userName" type="text" placeholder="" />
                    <span class="lighting"></span>
                </div>
                <div class="input-group">
                    <label class="palceholder" for="userPassword">Password</label>
                    <input class="form-control" name="password" id="userPassword" type="password" placeholder="" />
                    <span class="lighting"></span>
                </div>

                <button type="submit" id="login">Login</button>

            </form>
        </div>
        <div class="signup-wrapper text-center">
            <a href="index.php?page=accounts&action=register">Don't have an accout? <span class="text-primary">Create One</span></a>
        </div>
    </div>


</form>

<!--<h1><a href="index.php?page=accounts&action=register">Register</a></h1>-->

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script  src="js/index.js"></script>

<!--<script src="js/scripts.js"></script>-->
</body>
</html>