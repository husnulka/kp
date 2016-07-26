<form action="index.php" method="get" name="personal" onSubmit="return validateForm()">    
    <input type="hidden" name="ask" value="<?php echo base64_encode('part2') ?>" />
    <?php

    function createRandomPassword() {
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789";
        srand((double) microtime() * 1000000);
        $i = 0;
        $pass = '';
        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
        return $pass;
    }

    $finalcode = 'RS-' . createRandomPassword();
    ?>
    <input type="hidden" name="resid" value="<?php echo $finalcode ?>" />
    <dl style="margin-left: 10px;">
        <dd>
            <span>Nama</span>
            <input type="text" name="name" required="required" maxlength="50" />
        </dd>
        <!--                                        <dd>
                                                    <span>Last Name:</span>
                                                    <input type="text" name="lname" required="required" maxlength="50" />
                                                </dd>-->
        <dd>
            <span>Alamat</span>
            <input type="text" name="address" required="required" maxlength="100" />
        </dd>
        <dd>
            <span>No. Tlp./HP</span>
            <input type="text" name="cnum" onKeyPress="return isNumberKey(event)" required="required" maxlength="11" />
        </dd>
        <dd>
            <span>Tanggal Acara</span>
            <input type="text" name="d" class="tcal" required="required" />
        </dd>
        <!--        <dd>
                    <span>Motif</span>
                    <input type="text" name="motif" required="required" maxlength="20" />
                </dd>-->
        <dd>
            <span>Jenis Acara</span>
            <input type="text" name="toc" required="required" maxlength="30" />
        </dd>
        <input type="hidden" name="tre" value="catering">
        <!--                                        <dd>
                                                    <span>Type Of Reservation:</span>
                                                    <select name="tre">
                                                        <option value="catering">Catering</option>
                                                        <option value="functionroom">Function Room</option>
                                                    </select>
                                                </dd>-->

        <dd>
            <span style="width: 17px;">&nbsp;</span>
            <input type="checkbox" name="condition" value="checkbox" style="width: 13px;" /> Saya setuju dengan <a rel="facebox" href="terms_condition.php">syarat dan ketentuan</a>  yang berlaku.
        </dd>
        <dd>
            <span>&nbsp;</span>
            <input type="submit" value="Pesan" />
        </dd>
    </dl>
</form>