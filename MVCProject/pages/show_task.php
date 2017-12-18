<!doctype html>

<html lang="en">
<head>
    <?php include 'headers.php';?>
</head>

<body>

<h1 align="left">The Task for the user</h1>
<br>


<?php
//this is how you print something  $data contains the record that was selected on the table.

print utility\htmlTable::generateTableFromOneRecord($data);

?>

        <h2><a href="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?>">Update Task</a></h2>

        <br>

        <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form2">
        <button type="submit" form="form2" value="delete">Delete Task</button>
        </form>

        <br>

        <h2><a href="index.php?page=accounts&action=showProfile&id=<?php echo $data->id; ?>">My Profile</a></h2>

        <h2><label><a href="index.php">Logout</a></label>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script  src="js/index.js"></script>

</body>
</html>