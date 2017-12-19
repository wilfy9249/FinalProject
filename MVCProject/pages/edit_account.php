
<?php include 'headers.php';?>

<body>

<div class="container">
    <form action="index.php?page=accounts&action=edit&id=<?php echo $data->id; ?>" method="post">

        <div class="wrapper">
            <div class="inner-warpper text-center">
                <h2 class="title">Edit Profile</h2>
                <form action="" id="formvalidate">


                    <label ><b>ID: <?php echo $_GET['id']; ?></b></label><br><br>
                    <label><b>First Name:</b></label><br>
                    <input type="text" name="fname" placeholder="<?php echo $data->fname; ?>"/><br/><br>
                    <label><b>Last Name:</b></label><br>
                    <input type="text" name="lname" placeholder="<?php echo $data->lname; ?>" /><br/><br>
                    <label><b>Email Address:</b></label><br>
                    <input type="email" name="email" placeholder="<?php echo $data->email; ?>" required/><br/><br>
                    <label><b>Contact No:</b></label><br>
                    <input type="text" name="contactNo" placeholder="<?php echo $data->phone; ?>" /><br/><br>
                    <label><b>BirthDate:</b></label><br>
                    <input type="text" name="birthdate" placeholder="<?php echo $data->birthday; ?>" /><br/><br>
                    <label><b>Gender:</b></label><br>
                    <input type="text" name="gender" placeholder="<?php echo $data->gender; ?>" /><br/><br>
                    <label><b>Password</b></label><br>
                    <input type="password" name="password" placeholder=" " required /><br/><br>

                    <button type="submit" id="edit">Edit</button>

                </form>
            </div>
    </form>
</div>

<?php include 'footer.php';?>

