
<a rel="facebox" href="addteammember.php"> Tambah anggota tim </a>
<table id="resultTable" data-responsive="table">
    <thead>
        <tr>
            <th> Nama Tim </th>
            <th> Anggota Tim </th>
            <th> Aksi </th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('../connect.php');
        $result = $db->prepare("SELECT * FROM catering_member");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
            ?>
            <tr class="record">
                <td><?php echo $row['ct_name']; ?></td>
                <td><?php echo $row['ctm_member']; ?></td>
                <td>
                    <a rel="facebox" href="editteammember.php?id=<?php echo $row['ctm_id']; ?>"> Ubah </a> | 
                    <a href="#" id="<?php echo $row['ctm_id']; ?>" class="delbutton" title="Klit untuk menghapus">Hapus</a>
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
            if (confirm("Apakah anda yakin akan menghapus data?"))
            {
                $.ajax({
                    type: "GET",
                    url: "deleteteammember.php",
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