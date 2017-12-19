
    <?php include 'headers.php';?>

<body>

<h1 align="center">WSD - FINAL PROJECT</h1>

<form action="index.php?page=tasks&action=login" method="POST">

    <div class="wrapper">
        <div class="inner-warpper text-center">
            <h2 class="title">Login to your account</h2>
            <form action="" id="formvalidate">
                <div class="input-group">
                    <label class="palceholder" for="userName" >User Name</label>
                    <input class="form-control" name="email" id="userName" type="email" placeholder="" required="" />
                    <span class="lighting"></span>
                </div>
                <div class="input-group">
                    <label class="palceholder" for="userPassword">Password</label>
                    <input class="form-control" name="password" id="userPassword" type="password" placeholder="" required=""/>
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

    <?php include 'footer.php';?>