
<?php include 'headers.php';?>


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


<?php include 'footer.php';?>