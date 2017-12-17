<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <!--<link rel="stylesheet" href="css/styles.css?v=1.0">-->

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <![endif]-->
</head>

<body>


<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    
    Create Date: <input type="text" name="createddate"><br/>
    Due Date: <input type="text" name="duedate"><br/>
    Message: <input type="text" name="message"><br/>
    Is Done: <input type="text" name="isdone"><br/><br>

    <button type="submit" id="create">Add</button>
</form>



<script src="js/scripts.js"></script>
</body>
</html>
