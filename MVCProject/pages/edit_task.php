
    <?php include 'headers.php';?>

<body>

        <div class="container">
            <form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?>" method="post">

                <div class="wrapper">
                    <div class="inner-warpper text-center">
                        <h2 class="title">Update a task</h2>
                        <form action="" id="formvalidate">


                            <label ><b>ID: <?php echo $_GET['id']; ?></b></label><br><br>
                            <label><b>Create Date:</b></label><br>
                            <input type="text" name="createddate" placeholder="<?php echo $data->createddate;?>" /><br/><br>
                            <label><b>Due Date:</b></label><br>
                            <input type="text" name="duedate" placeholder="<?php echo $data->duedate;?>" /><br/><br>
                            <label><b>Message:</b></label><br>
                            <input type="text" name="message" placeholder="<?php echo $data->message;?>" /><br/><br>
                            <label><b>IS Done:</b></label><br>
                            <input type="text" name="isdone" placeholder="<?php echo $data->isdone;?>" /><br/><br>
                            <!--<select>
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select><br><br><br>-->

                            <button type="submit" id="create">Update</button>

                        </form>
                    </div>
            </form>
        </div>

        <?php include 'footer.php';?>
