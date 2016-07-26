<table id="resultTable" data-responsive="table">
    <thead>
        <tr>
            <th width="20%"> ID Reservasi </th>
            <th width="60%"> Menu </th>
            <th width="20%"> Aksi </th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('../connect.php');
        $result = $db->prepare("SELECT * FROM menu_res ORDER BY id DESC");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
            ?>
            <tr class="record">
                <td><?php echo $row['res_id']; ?></td>
                <td><?php
                    $menumenu = $row['menu'];
                    $results = $db->prepare("SELECT * FROM menu WHERE id= :userid");
                    $results->bindParam(':userid', $menumenu);
                    $results->execute();
                    for ($i = 0; $rows = $results->fetch(); $i++) {
                        echo $rows['name'];
                    }
                    ?></td>
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
            if (confirm("Apakah anda yakin akan menghapus data menu reservasi?"))
            {
                $.ajax({
                    type: "GET",
                    url: "deleteorder.php",
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