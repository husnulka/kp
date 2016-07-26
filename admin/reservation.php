<table id="resultTable" data-responsive="table">
    <thead>
        <tr>
            <th width="3%"> Tanggal Reservasi </th>
            <th width="3%"> Tanggal Acara </th>
            <th width="21%"> ID Reservasi </th>
            <th width="11%"> Nama </th>
            <th width="11%"> No. Tlp/HP </th>
            <th width="11%"> Alamat </th>
            <th width="5%"> Pax </th>
            <th width="11%"> Catering Team </th>
            <th width="11%"> Status </th>
            <th width="12%"> Aksi </th>
        </tr>
    </thead>
    <tbody>

        <?php
        include('../connect.php');
        $result = $db->prepare("SELECT * FROM reservation ORDER BY id DESC");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
            ?>
            <tr class="record">
                <td><?php echo $row['resdate']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['res_id']; ?></td>
                <td><?php echo $row['firstname']; ?>&nbsp;<?php echo $row['lastname']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['pax']; ?></td>
                <td><?php echo $row['team']; ?></td>
                <td><?php echo $rStatus[$row['status']]; ?></td>
                <td>
                    <a rel="facebox" href="details.php?res=<?php echo $row['res_id']; ?>">Detail</a><br>
                    <a rel="facebox" href="eteam.php?res=<?php echo $row['res_id']; ?>">AddTeam</a><br>
                    <a rel="facebox" href="editstatus.php?res=<?php echo $row['res_id']; ?>">Status</a><br>
                    <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Klik untuk menghapus">Hapus</a>
                </td>
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
            if (confirm("Apakah anda yakin akan menghapus data reservasi?"))
            {
                $.ajax({
                    type: "GET",
                    url: "deletereservation.php",
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