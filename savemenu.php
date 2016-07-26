<?php
include('connect.php');
$resres = $_POST['resres'];
$asa = $_POST['asa'];
$dsdd = $_POST['price'];
$edittable = $_POST['menu'];
$bbbb = $_POST['asssss'];
$N = count($edittable);

for ($i = 0; $i < $N; $i++) {
    if ($asa == 'specialty') {
        if ($N < 15) {
            ?>
            <script>
                alert('Minimum pemesanan untuk kategori Specialty adalah 15 hidangan.');
                location.href = "index.php?ask=<?php echo base64_encode('portal') ?>&res=<?php echo $resres ?>&mcat=<?php echo $asa ?>&additional=<?php echo $bbbb ?>";
            </script>
            <?php
            exit();
        }
        if ($N >= 15) {
            $sql = "INSERT INTO menu_res (res_id,menu,price) VALUES (:a,:b,:c)";
            $q = $db->prepare($sql);
            $q->execute(array(':a' => $resres, ':b' => $edittable[$i], ':c' => $dsdd[$i]));
        }
    }
    if ($asa != 'specialty') {
        $sql = "INSERT INTO menu_res (res_id,menu) VALUES (:a,:b)";
        $q = $db->prepare($sql);
        $q->execute(array(':a' => $resres, ':b' => $edittable[$i]));
    }
}
//mysql_close($con);
?>
<script>
    alert('Reservasi berhasil dilakukan, ID Reservasi anda adalah : <?php echo $resres; ?>');
    location.href = "index.php?ask=<?php echo base64_encode('portal') ?>&res=<?php echo $resres ?>&mcat=<?php echo $asa ?>&additional=<?php echo $bbbb ?>";
</script>