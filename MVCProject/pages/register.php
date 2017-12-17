<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <![endif]-->
</head>

<body>


<form action="index.php?page=accounts&action=register" method="post">
    <!--First name: <input type="text" name="fname"><br>
    Last name: <input type="text" name="lname"><br>
    Email: <input type="text" name="email"><br>
    Phone: <input type="text" name="phone"><br>
    Birthday: <input type="text" name="birthday"><br>
    Gender: <input type="text" name="gender"><br>
    Password: <input type="password" name="password"><br><br><br>-->

    <div>
        <input type="text" id="first_name" name="first_name" required placeholder=" " />
        <label for="first_name">First Name</label>
    </div>

    <div>
        <input type="text" id="last_name" name="last_name" required placeholder=" " />
        <label for="last_name">Last Name</label>
    </div>

    <div>
        <input type="email" id="email" name="email" required placeholder=" " />
        <label for="email">Email Address</label>
        <div class="requirements">
            Must be a valid email address.
        </div>
    </div>

    <div>
        <input type="text" id="phone" name="phone" required placeholder=" " />
        <label for="last_name">Contact No</label>
    </div>

    <div>
        <input type="text" id="birthdate" name="birthdate" required placeholder=" " />
        <label for="last_name">BirthDate</label>
    </div>

    <div>
        <input type="text" id="gender" name="gender" required placeholder=" " />
        <label for="last_name">Gender</label>
    </div>

    <div>
        <input type="password" id="password" name="password" required placeholder=" " />
        <label for="last_name">Enter Password</label>
    </div>

    <br><br>

    <button type="submit" id="login">Sign Up</button>
</form>


<script src="js/scripts.js"></script>
</body>
</html>
