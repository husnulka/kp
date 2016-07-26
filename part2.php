<style>
    html {
        background-image:url(images/print.png);
    }
</style>
<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    function validateForm()
    {
        var a = document.forms["fhall"]["nopax"].value;
        if (a > 80)
        {
            alert("Maximum Number of pax allowed in Function hall is 80");
            return false;
        }
    }
    function validateFormas()
    {
        var d = document.forms["catering"]["mcat"].value;
        var c = document.forms["catering"]["nopax"].value;
        if (d == 'merienda' && c < 100)
        {
            alert("Minimum Number of pax allowed in merienda is 100");
            return false;
        }
        if (d == 'lunch_and_dinner' && c < 50)
        {
            alert("Minimum Number of pax allowed in Lunch and Dinner is 50");
            return false;
        }
    }
</script>
<SCRIPT language=Javascript>
    <!--
      function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
    //-->
</SCRIPT>
<div style="margin: 60px auto 0px;width:300px;">
    <?php
    $d = $_GET['d'];
    $d2 = date("m/d/Y");
    $datetime1 = new DateTime($d);

    $datetime2 = new DateTime($d2);

    $difference = $datetime1->diff($datetime2);
    $tglReserve = $difference->days;
    if ($tglReserve < 14) {
        echo '<div style="text-align:center; color: #fff; font-weight:bold;"><h3>Anda dapat melakukan reservasi minimal 2 minggu sebelum hari H, terima kasih<br></h3><a href="index.php?ask=' . base64_encode("reservation") . '">Kembali</a></div>';
    }

    if ($tglReserve >= 14) {
        $wapak = $_GET['tre'];
        if ($wapak == 'catering') {
            ?>
            <form action="index.php" method="post" name="catering" onsubmit="return validateFormas()">
                <input type="hidden" name="ask" value="<?php echo base64_encode('catering') ?>" />
                <input type="hidden" name="resid" value="<?php echo $_GET['resid']; ?>" />
                <input type="hidden" name="d" value="<?php echo $_GET['d']; ?>" />
                <!--<input type="hidden" name="motif" value="<?php echo $_GET['motif']; ?>" />-->
                <input type="hidden" name="toc" value="<?php echo $_GET['toc']; ?>" />
                <input type="hidden" name="tre" value="<?php echo $_GET['tre']; ?>" />
                <input type="hidden" name="name" value="<?php echo $_GET['name']; ?>" />
                <input type="hidden" name="lname" value="<?php echo (isset($_GET['lname']) ? $_GET['lname'] : ''); ?>" />
                <input type="hidden" name="cnum" value="<?php echo $_GET['cnum']; ?>" />
                <input type="hidden" name="address" value="<?php echo $_GET['address']; ?>" />
                Jam : <br /><input type="text" name="time" required="required" maxlength="5" /> <select name="dws"><option>Siang</option><option>Malam</option></select> 
                <!--                Lokasi: <br>
                                <select name="loc">
                                    <option value=".10">Outdoor</option>
                                    <option value=".00">Indoor</option>
                                </select>-->
                <br>
                Lokasi: <br><input type="text" name="vn" style="margin-bottom: 13px; width: 298px;" required="required" maxlength="100" /><br>
                Jumlah Reservasi (pax): <br><input type="text" name="nopax" style="margin-bottom: 13px; width: 298px;" onKeyPress="return isNumberKey(event)" required="required" maxlength="5" /><br>
                Kategori: <br>
                <select name="mcat" style="margin-bottom: 13px; width: 298px;">
                    <option>&nbsp;</option>
                    <?php
                    include('connect.php');
                    $result = $db->prepare("SELECT * FROM maincategory");
                    $result->bindParam(':userid', $res);
                    $result->execute();
                    for ($i = 0; $row = $result->fetch(); $i++) {
                        ?>
                        <option><?php echo $row['name']; ?></option>
                        <?php
                    }
                    ?>
                </select>(*menu pada kategori ini dapat dilihat pada pilihan "Menu"<br><br>
                <input type="submit" value="Pesan" style="margin-bottom: 13px; width: 298px;" />
            </form>
            <?php
        }
    }
    ?>
</div>