<table id="resultTable" data-responsive="table">
    <thead>
        <tr>
            <th> Nama </th>
            <th> Subyek </th>
            <th> Komentar </th>
            <th> Aksi </th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('../connect.php');
        $result = $db->prepare("SELECT * FROM suggestion ORDER BY id DESC");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
            ?>
            <tr class="record">
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['subject']; ?></td>
                <td><?php echo $row['comment']; ?></td>
                <td><a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Klik untuk hapus">Hapus</a></td>
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
                    url: "deletesuggestion.php",
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