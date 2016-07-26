<?php
include('../connect.php');
$id = $_GET['id'];
$results = $db->prepare("SELECT * FROM catering_member WHERE ctm_id= :userid");
$results->bindParam(':userid', $id);
$results->execute();
for ($i = 0; $rows = $results->fetch(); $i++) {
    ?>
    <form action="editteammemberexec.php" method="post">
        <input type="hidden" name="memids" value="<?php echo $id; ?>" />
        <input type="hidden" name="team" value="<?php echo $rows['ct_name']; ?>" />
        Nama Tim : <?php echo $rows['ct_name']; ?><br><br>
    <!--        <select name="team">
        <?php
        $result = $db->prepare("SELECT * FROM catering_team");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
            ?>
                            <option><?php echo $row['ct_name']; ?></option>
            <?php
        }
        ?>
        </select><br>-->
        Anggota Tim<br>
        <textarea name="member"><?php echo $rows['ctm_member']; ?></textarea><br>
        <input type="submit" value="Save">
    </form>
    <?php
}
?>