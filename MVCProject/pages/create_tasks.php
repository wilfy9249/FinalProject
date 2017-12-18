<!doctype html>

<html lang="en">
<head>
    <?php include 'headers.php';?>
</head>

<body>

<form action="index.php?page=tasks&action=create" method="POST">

    <div class="wrapper">
        <div class="inner-warpper text-center">
            <h2 class="title">Insert a task</h2>
            <form action="" id="formvalidate">


                <label><b>Create Date:</b></label><br>
                <input type="date" name="createddate" placeholder="" required autofocus/><br/><br>
                <label><b>Due Date:</b></label><br>
                <input type="date" name="duedate" placeholder="" required autofocus/><br/><br>
                <label><b>Message:</b></label><br>
                <input type="text" name="message" placeholder="" required autofocus/><br/><br>
                <label><b>IS Done:</b></label><br>
                <input type="text" name="isDone" placeholder="" required autofocus/><br/><br><br>

                <button type="submit" id="create">Add</button>

            </form>
        </div>
</form>


<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script src="js/scripts.js"></script>

</body>
</html>
