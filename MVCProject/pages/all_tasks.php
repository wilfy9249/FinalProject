<!doctype html>

<html lang="en">
<head>
    <?php include 'headers.php';?>
</head>

<body>

<h1 align="center">The list of Tasks for the user</h1>
<br>


<h2><a href="index.php?page=tasks&action=create">Insert Record</a></h2>


<br><br>

<?php
//this is how you print something
print utility\htmlTable::genarateTableFromMultiArray($data);

?>

<h2><label><a href="index.php">Logout</a></label></h2>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script  src="js/index.js"></script>

</body>
</html>