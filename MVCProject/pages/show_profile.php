<!doctype html>

<html lang="en">
<head>
    <?php include 'headers.php';?>
</head>

<body>

<div class="container">
    <form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?>" method="post">

        <div class="wrapper">
            <div class="inner-warpper text-center">
                <h2 class="title">MY PROFILE</h2>
                <form action="" id="formvalidate">


                    <label ><b>First Name: <?php echo $_GET['firstName']; ?></b></label><br><br>
                    <label ><b>Last Name: <?php echo $_GET['lastName']; ?></b></label><br><br>
                    <label ><b>ID: <?php echo $_GET['id']; ?></b></label><br><br>
                    <label ><b>ID: <?php echo $_GET['id']; ?></b></label><br><br>

                    <button type="submit" id="create">Edit Profile</button>

                </form>
            </div>
    </form>
</div>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script src="js/scripts.js"></script>
</body>
</html>
