
<?php include 'headers.php';?>

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
                <input type="text" name="isdone" placeholder="" required autofocus/><br/><br>
                <!--<select>
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select><br><br><br>-->

                <button type="submit" id="create">Add</button>

            </form>
        </div>
</form>


<?php include 'footer.php';?>
