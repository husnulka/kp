<?php
require_once('auth.php');
?>
<html>
    <head>
        <title>KANAYA Food</title>
        <link rel="icon" href="../images/favicon.ico" />
        <!-- CSS Style -->
        <link rel="stylesheet" href="admin.css">
        <!--sa poip up-->
        <script src="dng_comedor.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/application.js" type="text/javascript" charset="utf-8"></script>
        <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
        <script src="lib/jquery.js" type="text/javascript"></script>
        <script src="src/facebox.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('a[rel*=facebox]').facebox({
                    loadingImage: 'src/loading.gif',
                    closeImage: 'src/closelabel.png'
                })
            })
        </script>
    </head>
    <body>
        <?php
        function formatMoney($number, $fractional = false) {
            if ($fractional) {
                $number = sprintf('%.2f', $number);
            }
            while (true) {
                $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1.$2', $number);
                if ($replaced != $number) {
                    $number = $replaced;
                } else {
                    break;
                }
            }
            return $number;
        }
        $rStatus = array("0"=>"Ditunda", "1"=>"Diterima", "2"=>"Dibatalkan", "3"=>"Selesai" );//reservation.php, report.php
        $actv1 = $actv2 = $actv3 = $actv4 = $actv5 = $actv6 = $actv7 = $actv8 = "";
        if (isset($_REQUEST['ask']) && trim($_REQUEST['ask']) != '') {
            switch (trim($_REQUEST['ask'])) {
                case 'menu':
                    $fl = 'menu.php';
                    $actv2 = 'class="active"';
                    break;
                case 'menuorders':
                    $fl = 'menuorders.php';
                    $actv3 = 'class="active"';
                    break;
                case 'suggestions':
                    $fl = 'suggestions.php';
                    $actv4 = 'class="active"';
                    break;
                case 'team':
                    $fl = 'team.php';
                    $actv5 = 'class="active"';
                    break;
                case 'teammember':
                    $fl = 'teammember.php';
                    $actv6 = 'class="active"';
                    break;
                case 'adminaccount':
                    $fl = 'adminaccount.php';
                    $actv7 = 'class="active"';
                    break;
                case 'report':
                    $fl = 'report.php';
                    $actv8 = 'class="active"';
                    break;
                case 'edit':
                    $fl = 'edit.php';
                    break;
                case 'export':
                    $fl = 'backup/export.php';
                    break;
                case 'import':
                    $fl = 'backup/import.php';
                    break;
                default:
            }
        } else {
            $fl = 'reservation.php';
            $actv1 = 'class="active"';
        }
        ?>
        <div id="top">
            <div class="logo">
                <img src="../images/logo.png"> 
                <span style="float:right; color:#FFFFFF; font-weight:bold; display: inline-block; padding: 20px 0 0 20px;">
                    Hello <?php echo $_SESSION['USERNAME'] ?>
                </span>
            </div>
        </div>
        <div class="container clearfix">
            <div class="one-third1 column">
                <ul>
                    <li <?php echo $actv1 ?>><a href="index.php"><img alt="" src="img/home.png"><span>Reservasi</span></a></li>
                    <li <?php echo $actv2 ?>><a href="index.php?ask=menu"><img alt="" src="img/page.png"><span>Menu Makanan</span></a></li>
                    <!-- <li <?php echo $actv3 ?>><a href="index.php?ask=menuorders"><img alt="" src="img/menuorder.png"><span>Pemesanan Menu</span></a></li> -->
                    <li <?php echo $actv4 ?>><a href="index.php?ask=suggestions"><img alt="" src="img/mesage.png"><span>Komentar</span></a></li>
                    <li <?php echo $actv5 ?>><a href="index.php?ask=team"><img alt="" src="img/team.png"><span>Tim</span></a></li>
                    <li <?php echo $actv6 ?>><a href="index.php?ask=teammember"><img alt="" src="img/user.png"><span>Anggota Tim</span></a></li>
                    <?php
                    $sessPwr = $_SESSION['POWER'];
                    if ($sessPwr == 1) {
                        ?>
                        <li <?php echo $actv7 ?>><a href="index.php?ask=adminaccount"><img alt="" src="img/userpic.png"><span>Pemeliharaan</span></a></li>
                        <?php
                    }
                    ?>
                    <li <?php echo $actv8 ?>><a href="index.php?ask=report"><img alt="" src="img/slider.png"><span>Laporan Transaksi</span></a></li>
                    <li><a href="../index.php"><img alt="" src="img/logout.png"><span>Logout</span></a></li>
                </ul>
            </div>
            <div class="two-thirds1 column">
                <div class="thewraper">
                    <div id="formdesign"><input type="text" name="filter" value="" id="filter" placeholder="cari..." autocomplete="off" /></div>
                    <?php
                    include $fl;
                    ?>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="copyrights">&copy; Copyright 2015 Kanaya FOOD </div>
        </div>
    </body>
</html>