<div id="map">
    <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Jalan+Sukasenang,+Bandung,+West+Java,+Indonesia&amp;aq=0&amp;oq=sukasenang,+bandung&amp;sll=37.0625,-95.677068&amp;sspn=37.956457,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Jalan+Sukasenang,+Bandung,+Jawa+Barat,+Indonesia&amp;ll=-6.899954,107.637043&amp;spn=0.005816,0.010568&amp;t=m&amp;z=14&amp;output=embed"></iframe>

</div>
<div style="color: rgb(255, 255, 255); margin-left: 10px; width: 100%;">
    Alamat : Jl Sukasenang no 24 bandung, 40124 <br>
    Tlp/Fax : (022) 7208110 /  7235854<br>
    Email :  costumercare@kanayafood.com<br>
    Khusus Pemesanan : 081320250001 /  085659000778<br>
    PIN BB (Pemesanan) : 215fb867<br>
    <form action="savecomment.php" method="post" style="margin-top: 10px; margin-bottom: 0px;">
        <span id="clabel">Subyek</span>
        <select name="subject" style="width: 205px; padding:3px 0;">
            <option>Makanan</option>
            <option>Layanan</option>
            <option>Lainnya</option>
        </select><br>
        <div style="height:3px;"></div>
        <span id="clabel">Nama</span><input type="text" method="post" name="name" style="width: 210px; padding:3px 0;"><br><div style="height:3px;"></div>
        <span id="clabel">Komentar</span><textarea name="comment" style="width: 210px; padding:3px 0; height: 42px;"></textarea><br>
        <div style="height:3px;">

        </div>
        <span id="clabel">&nbsp;</span><input type="submit" value="Kirim" style="width: 210px;" />
    </form> 
    <?php
    if (isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0) {
        foreach ($_SESSION['ERRMSG_ARR'] as $msg) {
            echo '<span style="color:#ffffff; font-weight: bold;">', $msg, '</span>';
        }
        unset($_SESSION['ERRMSG_ARR']);
    }
    ?>
</div>