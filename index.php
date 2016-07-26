<html>
    <head>
        <title>KANAYA Food</title>
        <link rel="icon" href="images/favicon.ico" />
        <link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
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

        <!--        reservation-->
        <link rel="stylesheet" type="text/css" href="tcal.css" />
        <script type="text/javascript" src="tcal.js"></script>
        <script type="text/javascript">
            function validateForm() {
                if (document.personal.condition.checked == false) {
                    alert('Syarat dan Ketentuan yang berlaku harus disetujui.');
                    return false;
                } else {
                    return true;
                }
            }
            function isNumberKey(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;

                return true;
            }
        </script>
    </head>
    <body>
        <?php

    		session_start();// ada yg butuh session : savecomment.php untuk di contact.php
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

        $actv1 = $actv2 = $actv3 = $actv4 = $actv5 = $actv6 = $title = "";
        if (isset($_REQUEST["ask"])) {
            switch (base64_decode(trim($_REQUEST["ask"]))) {
                case "inquiry":
                    $title = "Delicious Experience";
                    $fl = "inquiry.php";
                    $actv1 = ' class="active"';
                    break;
                case "menu":
                    $title = "Menu List";
                    $fl = "menu.php";
                    $actv2 = ' class="active"';
                    break;
                case "reservation": //step 1 (reservasi) : nama, alamat ...
                    $title = "Formulir Reservasi";
                    $fl = "reservation.php";
                    $actv3 = ' class="active"';
                    break;
                case "part2": // step 2 (reservasi) : waktu, lokasi, tempat, jumlah pax, tipe catering
                    $title = "Formulir Reservasi";
                    $fl = "part2.php";
                    $actv3 = ' class="active"';
                    break;
                case "catering":// step 3 (reservasi)
                    $title = "Formulir Reservasi";
                    $fl = "catering.php";
                    $actv3 = ' class="active"';
                    break;
                case "portal":// step 4 (reservasi) : pilih menu yang diinginkan
                    $title = "Formulir Reservasi";
                    $fl = "portal.php";
                    $actv3 = ' class="active"';
                    break;
                case "about-us":
                    $fl = "about-us.php";
                    $actv4 = ' class="active"';
                    break;
                case "contact":
                    $fl = "contact.php";
                    $actv5 = ' class="active"';
                    break;
                case "loginform":
                    $fl = "loginform.php";
                    $actv6 = 'class="active"';
                    break;
                default:
            }//nsw
        } else {
            $title = "Delicious Experience";
            $fl = "home.php";
            $actv1 = ' class="active"';
        }//nelse
        ?>
        <div class="row-top">
            <div class="main">
                <div class="wrapper">
                    <h1>
                        <img src="images/logo.png" width="200" />
<!--                        <a href="">Company Name<br><span style="font-family: arial; font-size: 15px;">Restaurant</span></a>-->
                    </h1>
                    <nav>
                        <ul class="menu">
                            <li><a <?php echo $actv1; ?> href="index.php">Home</a></li>
                            <li><a <?php echo $actv2; ?> href="index.php?ask=<?php echo base64_encode("menu") ?>">Menu</a></li>
                            <li><a <?php echo $actv3; ?> href="index.php?ask=<?php echo base64_encode("reservation") ?>">Reservasi</a></li>
                            <li><a <?php echo $actv4; ?> href="index.php?ask=<?php echo base64_encode("about-us") ?>">Tentang Kami</a></li>
                            <li><a <?php echo $actv5; ?> href="index.php?ask=<?php echo base64_encode("contact") ?>">Kontak Kami</a></li>
                            <li><a <?php echo $actv6; ?> href="index.php?ask=<?php echo base64_encode("loginform") ?>">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
            <div class="row-bot-bg">
                <div class="maincon">
                    <div class="slider-wrapper">
                        <div class="slider">
                            <div id="slidercon">
                                <div id="title">
                                    <?php echo $title; ?>
                                </div>
                                <?php include $fl; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">&copy; 2015 KANAYA Food</div>
    </body>
</html>