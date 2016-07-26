
<a rel="facebox" href="addmenu.php"> Tambah Menu </a>
<table id="resultTable" data-responsive="table">
    <thead>
        <tr>
            <th> Kategori Utama </th>
            <th> Sub Kategori </th>
            <th> Nama </th>
            <th> Deskripsi </th>
            <th> Harga </th>
            <th> Aksi </th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('../connect.php');
        $result = $db->prepare("SELECT * FROM menu ORDER BY id DESC");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
            ?>
            <tr class="record">
                <td><?php echo $row['mcat']; ?></td>
                <td><?php echo $row['scat']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><a rel="facebox" href="editmenu.php?id=<?php echo $row['id']; ?>"> Ubah </a> | <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete">Hapus</a></td>
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
            if (confirm("Sure you want to delete this menu? There is NO undo!"))
            {
                $.ajax({
                    type: "GET",
                    url: "deletemenu.php",
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