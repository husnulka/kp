<form action="savestatus.php" method="post">
    <input type="hidden" name="memids" value="<?php echo $_GET['res']; ?>" />
    <select name="stat">
        <option value="0">Ditunda</option>
        <option value="1">Disetujui</option>
        <option value="2">Dibatalkan</option>
        <option value="3">Selesai</option>
    </select><br>
    <input type="submit" value="Simpan">
</form>