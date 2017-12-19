
    <?php include 'headers.php';?>

<body>

<div class="container">
    <form action="index.php?page=accounts&action=showProfile&id=<?php echo $data->id; ?>" method="POST">

        <div class="wrapper">
            <div class="inner-warpper text-center">
                <h2 class="title">MY PROFILE</h2>
                <form action="" id="formvalidate">

                    <label ><b>First Name: <?php echo $data->fname; ?></b></label><br><br>
                    <label ><b>Last Name: <?php echo $data->lname; ?></b></label><br><br>
                    <label ><b>Email: <?php echo $data->email; ?></b></label><br><br>
                    <label ><b>Contact No: <?php echo $data->phone; ?></b></label><br><br>
                    <label ><b>Birthdate: <?php echo $data->birthday; ?></b></label><br><br>
                    <label ><b>Gender: <?php echo $data->gender; ?></b></label><br><br>

                    <button type="submit" id="create">Edit Profile</button>

                </form>
            </div>
    </form>
</div>

<?php include 'footer.php';?>
