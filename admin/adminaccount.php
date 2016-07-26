<a rel="facebox" href="addadmin.php"> Add Admin </a> &nbsp;&nbsp; 
<a href="index.php?ask=export"> Backup </a> &nbsp;&nbsp; 
<a href="index.php?ask=import"> Restore Backup </a>
<br><br>
<table id="resultTable" data-responsive="table">
    <thead>
        <tr>
            <th> Username </th>
            <th> Password </th>
            <th> Power </th>
            <th> Action </th>
        </tr>
    </thead>
    <tbody>

        <?php
        include('../connect.php');
        $result = $db->prepare("SELECT * FROM user");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
            ?>
            <tr class="record">
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['power']; ?></td>
                <td><a rel="facebox" href="editteaccount.php?id=<?php echo $row['id']; ?>"> Edit </a> | <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete">Delete</a></td>
            </tr>
            <?php
        }
        ?>

    </tbody>
</table>
<script src="js/jquery.js"></script>
<script type="text/javascript">
    $(function () {
        $(".delbutton").click(function () {
//Save the link in a variable called element
            var element = $(this);
//Find the id of the link that was clicked
            var del_id = element.attr("id");
//Built a url to send
            var info = 'id=' + del_id;
            if (confirm("Apakah anda yakin akan menghapus data?"))
            {
                $.ajax({
                    type: "GET",
                    url: "deleteteadmin.php",
                    data: info,
                    success: function () {
                    }
                });
                $(this).parents(".record").animate({backgroundColor: "#fbc7c7"}, "fast")
                        .animate({opacity: "hide"}, "slow");
            }
            return false;
        });
    });
</script>