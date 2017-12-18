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
                        <h2 class="title">Update a task</h2>
                        <form action="" id="formvalidate">


                            <label ><b>ID: <?php echo $_GET['id']; ?></b></label><br><br>
                            <label><b>Create Date:</b></label><br>
                            <input type="date" name="createddate" placeholder="" required autofocus/><br/><br>
                            <label><b>Due Date:</b></label><br>
                            <input type="date" name="duedate" placeholder="" required autofocus/><br/><br>
                            <label><b>Message:</b></label><br>
                            <input type="text" name="message" placeholder="" required autofocus/><br/><br>
                            <label><b>IS Done:</b></label><br>
                            <input type="text" name="isDone" placeholder="" required autofocus/><br/><br><br>

                            <button type="submit" id="create">Update</button>

                        </form>
                    </div>
            </form>
        </div>

        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
        <script src="js/scripts.js"></script>
</body>
</html>
