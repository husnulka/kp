<!--sa poip up-->
<link href="admin/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="admin/lib/jquery.js" type="text/javascript"></script>
<script src="admin/src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('a[rel*=facebox]').facebox({
            loadingImage: 'admin/src/loading.gif',
            closeImage: 'admin/src/closelabel.png'
        })
    })
</script>
<script language="javascript">
    function Clickheretoprint()
    {
        var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
        disp_setting += "scrollbars=yes,width=700, height=400, left=100, top=25";
        var content_vlue = document.getElementById("content").innerHTML;

        var docprint = window.open("", "", disp_setting);
        docprint.document.open();
        docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');
        docprint.document.write(content_vlue);
        docprint.document.close();
        docprint.focus();
    }
</script>
<a href="javascript:Clickheretoprint()" style="font-size:20px";>Cetak</a>
<div class="content" id="content" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal; margin:0 auto;">
    <div style="text-align:center;">
        <strong style="font-size:14px"></strong>KANAYA Food</strong><br>
        <strong>RESTAURANT & CATERING</strong><br>
    </div><br><br>
    <?php
    include('../connect.php');
    $res = $_GET['res'];
    $result = $db->prepare("SELECT * FROM reservation WHERE res_id= :userid");
    $result->bindParam(':userid', $res);
    $result->execute();
    for ($i = 0; $row = $result->fetch(); $i++) {
    	$dsdssd = $row['type_res'];
        ?>
        <div style="float:left; width:50%;line-height:20px;">
            ID Reservasi : <strong><?php echo $row['res_id']; ?></strong><br>
            Nama : <strong><?php echo $row['firstname']; ?></strong><br>
            <!--Last Name:<strong><?php echo $row['lastname']; ?></strong><br>-->
            Alamat : <strong><?php echo $row['address']; ?></strong><br>
            No. Tlp./HP : <strong><?php echo $row['contact']; ?></strong><br>
            Tanggal Acara : <strong><?php echo $row['date']; ?></strong><br>
            Jam : <strong><?php echo $row['time']; ?></strong><br>
    <!--            Motif : <strong><?php echo $row['motif']; ?></strong><br>-->
        </div>
        <div style="float: right; width: 50%; text-align: right; line-height: 20px; height: 162px;">
            Jenis Acara : <strong><?php echo $row['type_events']; ?></strong><br>
    <!--            Tipe Reservasi : <strong><?php
            echo $row['type_res'];
            $dsdssd = $row['type_res'];
            ?></strong><br>-->
            Kategori : <strong><?php echo $row['type_catering']; ?></strong><br>
            Jumlah Reservasi (Pax) : <strong><?php echo $row['pax']; ?></strong><br>
            Lokasi : <strong><?php echo $row['venueaddress']; ?></strong><br>

                            <!--            Combo: <strong><?php
            $sdsds = '-';
            $id = $row['combo'];
            $result = $db->prepare("SELECT * FROM combo WHERE id= :asas");
            $result->bindParam(':asas', $id);
            $result->execute();
            for ($i = 0; $rows = $result->fetch(); $i++) {
                echo $rows['comboname'] . '-' . $rows['combolist'];
                $sdsds = $rows['comboname'];
            }
            ?></strong><br>-->
            Total yang harus dibayar : &nbsp;
            <strong>Rp. <?php

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

                $sdrwer = $row['res_id'];
                $p = $row['pax'];
                $pr = $sdsds;
                $total = $p * $pr;
                if ($dsdssd != 'functionroom') {
                    //$dsd = $total;
                    //echo formatMoney($dsd, true);
                    echo formatMoney($row['amount'], true);
                }
                echo '</div>';
                if ($dsdssd == 'functionroom') {
                    $bbbb = $total + 3000;
                    echo formatMoney($bbbb, true);
                }
                ?>
            </strong>
            <br><br>
            <br><br>

            <?php
        }
        ?>
        <div style="clear:both"></div>
        <table id="resultTable" width="100%" style="font-size:11px; font-family:arial; font-weight:normal;">
            <thead>
                <tr>
                    <th style="text-align:center;"> No. </th>
                    <th style="text-align:center;"> Tipe Menu </th>
                    <th style="text-align:center;"> Menu </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $db->prepare("SELECT * FROM menu_res WHERE res_id= :asas");
                $result->bindParam(':asas', $res);
                $result->execute();
                for ($i = 0; $rowas = $result->fetch(); $i++) {
                    $menu = $rowas['menu'];
                    $results = $db->prepare("SELECT * FROM menu WHERE id= :ll");
                    $results->bindParam(':ll', $menu);
                    $results->execute();
                    for ($j = 0; $rowass = $results->fetch(); $j++) {
                        ?>
                        <tr class="record">
                            <td width="10"><?php echo ($i + 1) ?></td>
                            <td><?php echo $rowass['scat']; ?></td>
                            <td><?php echo $rowass['name']; ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>