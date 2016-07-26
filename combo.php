<form action="savecombo.php" method="post">
    <input type="hidden" name="resres" value="<?php echo $_GET['res']; ?>">
    <input type="hidden" name="asa" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" name="addt" value="<?php echo $_GET['addt']; ?>">
    SIlakan pilih paket combo berikut:
    <br><select name="combo">
        <?php
        include('connect.php');
        $reqCat = $_GET['id'];
        $result = $db->prepare("SELECT * FROM combo WHERE mcat= :mcat");
        $result->bindParam(':mcat', $reqCat);
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
            ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['comboname']; ?>-<?php echo $row['combolist']; ?></option>
            <?php
        }
        ?>
    </select><br>
    <input type="submit" value="save">
</form>