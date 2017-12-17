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


                <input type="text" name="createddate" placeholder="Create Date" required autofocus/><br/><br>
                <input type="text" name="duedate" placeholder="Due Date" required autofocus/><br/><br>
                <input type="text" name="message" placeholder="Message" required autofocus/><br/><br>
                <input type="text" name="isDone" placeholder="Is Done" required autofocus/><br/><br><br>

                <button type="submit" id="create">Add</button>

            </form>
        </div>
</form>


<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script src="js/scripts.js"></script>

</body>
</html>
