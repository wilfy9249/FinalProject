
    <?php include 'headers.php';?>

<body>


<form action="index.php?page=accounts&action=register" method="post">
    <div class="wrapper">
        <div class="inner-warpper text-center">
            <h2 class="title">Register</h2>
            <form action="" id="formvalidate">

                <div class="input-group">
                    <label class="palceholder" for="firstName" >First Name</label>
                    <input class="form-control" name="fname" id="fname" type="text" placeholder="" required="" />
                    <span class="lighting"></span>
                </div>

                <div class="input-group">
                    <label class="palceholder" for="lastName" >Last Name</label>
                    <input class="form-control" name="lname" id="lname" type="text" placeholder="" required="" />
                    <span class="lighting"></span>
                </div>

                <div class="input-group">
                    <label class="palceholder" for="userName" >Email Address</label>
                    <input class="form-control" name="email" id="userName" type="email" placeholder="" required="" />
                    <span class="lighting"></span>
                </div>

                <div class="input-group">
                    <label class="palceholder" for="contactNo" >Contact No</label>
                    <input class="form-control" name="phone" id="phone" type="text" placeholder="" required="" />
                    <span class="lighting"></span>
                </div>

                <div class="input-group">
                    <label class="palceholder" for="birthdate" >Birthdate</label>
                    <input class="form-control" name="birthday" id="birthday" type="text" placeholder="" required=""/>
                    <span class="lighting"></span>
                </div>

                <div class="input-group">
                    <label class="palceholder" for="gender" >Gender</label>
                    <input class="form-control" name="gender" id="gender" type="text" placeholder="" required="" />
                    <span class="lighting"></span>
                </div>

                <div class="input-group">
                    <label class="palceholder" for="userPassword">Password</label>
                    <input class="form-control" name="password" id="password" type="password" placeholder="" required=""/>
                    <span class="lighting"></span>
                </div>

                <button type="submit" id="login">Sign Up</button>

            </form>
        </div>

</form>

    <?php include 'footer.php';?>