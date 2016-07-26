<?php

// configuration
include('connect.php');

// new data
$reqResvId = $_POST['resres'];
$ss = $_POST['combo'];
$reqCat = $_POST['asa'];
$reqAdd = $_POST['addt'];
// query
$sql = "UPDATE reservation 
        SET combo=?
		WHERE res_id=?";
$q = $db->prepare($sql);
$q->execute(array($ss, $reqResvId));
header("location: index.php?ask=" . base64_encode("portal") . "&res=$reqResvId&mcat=$reqCat&additional=$reqAdd");
?>