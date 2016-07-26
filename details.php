<?php
include('connect.php');

function formatMoney($number, $fractional = false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}

$id = $_GET['id'];
$result = $db->prepare("SELECT * FROM menu WHERE id= :userid");
$result->bindParam(':userid', $id);
$result->execute();
for ($i = 0; $row = $result->fetch(); $i++) {
    ?>
    <img src="menu/<?php echo $row['image']; ?>" width="500"><br><br>
    Nama : <strong><?php echo $row['name']; ?></strong><br>
    Deskripsi : <strong><?php echo $row['description']; ?></strong><br>
    Harga : <strong> Rp. <?php echo formatMoney($row['price'], true); ?></strong><br>
    <?php
}
?>