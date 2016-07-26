<div id="title">
    Status Pemesanan Terakhir
</div>

<form action="index.php?ask=<?php echo base64_encode("inquiry") ?>" method="post">
    <input type="text" name="res" placeholder="Masukkan ID Pemesanan" style="padding-left: 7px; float: left; margin-left: 10px; margin-right: 10px; width: 196px;">
    <input type="submit" value="Cari" style="float: left; width: 100px; height: 28px;" />
</form>

<div style="clear:both"><br /><br /></div>
<?php
include('connect.php');
$result = $db->prepare("SELECT * FROM menu ORDER BY rand() LIMIT 12");
$result->execute();
for ($i = 0; $row = $result->fetch(); $i++) {
    ?>
    <div id="imgcon">
        <a rel="facebox" href="details.php?id=<?php echo $row['id']; ?>">
            <img src="menu/<?php echo $row['image']; ?>" width="212" height="212">
        </a>
    </div>
    <?php
}
?>
