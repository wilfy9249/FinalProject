<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <![endif]-->
</head>

<body>


<form action="index.php?page=accounts&action=register" method="post">
    <div class="wrapper">
        <div class="inner-warpper text-center">
            <h2 class="title">Register</h2>
            <form action="" id="formvalidate">

                <div class="input-group">
                    <label class="palceholder" for="firstName" >First Name</label>
                    <input class="form-control" name="firstName" id="firstName" type="text" placeholder="" />
                    <span class="lighting"></span>
                </div>

                <div class="input-group">
                    <label class="palceholder" for="lastName" >Last Name</label>
                    <input class="form-control" name="lastName" id="lastName" type="text" placeholder="" />
                    <span class="lighting"></span>
                </div>

                <div class="input-group">
                    <label class="palceholder" for="userName" >Email Address</label>
                    <input class="form-control" name="email" id="userName" type="email" placeholder="" />
                    <span class="lighting"></span>
                </div>

                <div class="input-group">
                    <label class="palceholder" for="contactNo" >Contact No</label>
                    <input class="form-control" name="contactNo" id="contactNo" type="text" placeholder="" />
                    <span class="lighting"></span>
                </div>

                <div class="input-group">
                    <label class="palceholder" for="birthdate" >Birthdate</label>
                    <input class="form-control" name="birthdate" id="birthdate" type="text" placeholder="" />
                    <span class="lighting"></span>
                </div>

                <div class="input-group">
                    <label class="palceholder" for="gender" >Gender</label>
                    <input class="form-control" name="gender" id="gender" type="text" placeholder="" />
                    <span class="lighting"></span>
                </div>

                <div class="input-group">
                    <label class="palceholder" for="userPassword">Password</label>
                    <input class="form-control" name="password" id="userPassword" type="password" placeholder="" />
                    <span class="lighting"></span>
                </div>

                <button type="submit" id="login">Sign Up</button>

            </form>
        </div>

</form>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script  src="js/index.js"></script>
<!--<script src="js/scripts.js"></script>-->
</body>
</html>