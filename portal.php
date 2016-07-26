<html>
    <head>
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
    </head>
    <body style="background-image:url(images/print.png);">
        <div class="content" id="content" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal; margin:0 auto;">
            <div style="text-align:center;">
                <strong style="font-size:14px">KANAYA Food</strong><br>
                <strong>RESTAURANT & CATERING</strong><br>
            </div><br><br>
            <?php
            include('connect.php');

            $res = $_GET['res'];
            $cat = $_GET['mcat'];
            $result = $db->prepare("SELECT * FROM reservation WHERE res_id= :userid");
            $result->bindParam(':userid', $res);
            $result->execute();
            for ($i = 0; $row = $result->fetch(); $i++) {
                ?>
                <div style="float:left; width:50%;line-height:20px;font-size:14px;">
                    ID Reservasi : <strong><?php echo $row['res_id']; ?></strong><br>
                    Nama : <strong><?php echo $row['firstname']; ?></strong><br>
    <!--                    Last Name:<strong><?php echo $row['lastname']; ?></strong><br>-->
                    Alamat : <strong><?php echo $row['address']; ?></strong><br>
                    No. Tlp./HP : <strong><?php echo $row['contact']; ?></strong><br>
                    Tanggal Acara : <strong><?php echo $row['date']; ?></strong><br>
                    Jam : <strong><?php echo $row['time']; ?></strong><br>
                    <!--Motif : <strong><?php echo $row['motif']; ?></strong><br>-->
                </div>
                <div style="float: right; width: 50%; text-align: right; line-height: 20px; height: 162px;font-size:14px;">
                    Jenis Acara : <strong><?php echo $row['type_events']; ?></strong><br>
    <!--                    Tipe Reservasi : <strong><?php
                    echo $row['type_res'];
                    $typeRes = $row['type_res'];
                    ?></strong><br>-->
                    Kategori : <strong><?php echo $cat; ?></strong><br>
                    Jumlah Reservasi (pax) : <strong><?php echo $row['pax']; ?></strong><br>
                    Lokasi : <strong><?php echo $row['venueaddress']; ?></strong><br>

                                                                                            <!--                    Paket Combo: <strong><?php
                    $id = $row['combo'];
                    if ($id != '0') {
                        $result = $db->prepare("SELECT * FROM combo WHERE id= :asas");
                        $result->bindParam(':asas', $id);
                        $result->execute();
                        for ($i = 0; $rows = $result->fetch(); $i++) {
                            echo $rows['comboname'] . '-' . $rows['combolist'];
                            $sdsds = $rows['comboname'];
                        }
                    }
                    if ($id == '0') {
                        $sdsds = 0;
                        if ($cat != 'specialty') {
                            ?>
                                                                                                                                                                                                                                                                                                                    <a rel="facebox" style="font-size:14px;" href="combo.php?id=<?php echo $cat ?>&res=<?php echo $res ?>&addt=<?php echo $_GET['additional'] ?>">Pilih Paket Combo</a>
                            <?php
                        }
                        if ($cat == 'specialty') {
                            echo 'Tidak tersedia.';
                        }
                    }
                    ?></strong><br>-->
                    Total yang harus dibayar:&nbsp;
                    <strong>Rp. <?php
                        if ($cat != 'specialty') {
                            $sdrwer = $row['res_id'];
                            $p = $row['pax'];
                            $pr = $sdsds;
                            $total = $p * $pr;
                            $reqAdditional = $_GET['additional'];

                            $totalAdditional = $total * $reqAdditional;
                            $WATAMOVE = $total + $totalAdditional;
                            if ($typeRes != 'functionroom') {
                                $dsd = $WATAMOVE;
                                echo formatMoney($dsd, true);

                                $sql = "UPDATE reservation 
        SET amount=?
		WHERE res_id=?";
                                $q = $db->prepare($sql);
                                $q->execute(array($dsd, $sdrwer));
                            }
                            if ($typeRes == 'functionroom') {
                                $bbbb = $total + 3000;
                                echo formatMoney($bbbb, true);

                                $sql = "UPDATE reservation 
        SET amount=?
		WHERE res_id=?";
                                $q = $db->prepare($sql);
                                $q->execute(array($bbbb, $sdrwer));
                            }
                        }
                        if ($cat == 'specialty') {

                            $arara = $row['res_id'];
                            $resultas = $db->prepare("SELECT sum(price) FROM menu_res WHERE res_id= :a");
                            $resultas->bindParam(':a', $arara);
                            $resultas->execute();
                            for ($i = 0; $rowas = $resultas->fetch(); $i++) {
                                $fgfg = $rowas['sum(price)'];
                                if ($typeRes != 'functionroom') {
                                    $asasdd = $fgfg;
                                    echo formatMoney($asasdd, true);

                                    $sql = "UPDATE reservation 
				SET amount=?
				WHERE res_id=?";
                                    $q = $db->prepare($sql);
                                    $q->execute(array($asasdd, $arara));
                                }
                                if ($typeRes == 'functionroom') {
                                    $asasdd = $fgfg + 3000;
                                    echo formatMoney($asasdd, true);

                                    $sql = "UPDATE reservation 
				SET amount=?
				WHERE res_id=?";
                                    $q = $db->prepare($sql);
                                    $q->execute(array($asasdd, $arara));
                                }
                            }
                        }
                        ?>
                    </strong>
                    <br><br>
                    <br><br>
                </div>
                <?php
                $resulta = $db->prepare("SELECT * FROM menu_res WHERE res_id= :asas");
                $resulta->bindParam(':asas', $res);
                $resulta->execute();
                $rowa = $resulta->fetch(PDO::FETCH_NUM);
                if ($rowa == 0) {
                    ?>

                    <a rel="facebox" style="font-size:14px;" href="menuboard.php?id=<?php echo $cat ?>&res=<?php echo $res ?>&gfgfgfgfgfgf=<?php echo $_GET['additional'] ?>">Pilih menu yang diinginkan</a>
                    <?php
                }
                ?>

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
                        <th style="text-align:center;"> Harga Rp.</th>
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
                                <td><?php echo formatMoney($rowass['price'], true); ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div style="text-align:center; margin-top:100px;">
            <?php
            if ($rowa != 0) {
                ?>
                <a href="javascript:Clickheretoprint()" style="font-size:20px; text-decoration:none; color:#FFFFFF; padding: 10px; border:1px solid grey; margin-right: 10px; background-color:#333333; margin-top:40px;">Cetak</a>
                <a href="index.php" style="font-size:20px; text-decoration:none; color:#FFFFFF; padding: 10px; border:1px solid grey; background-color:#333333; margin-top:40px;">Selesai</a>
            <?php }
            ?>
        </div>
    </body>
</html>