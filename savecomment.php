<?php
session_start();
include('connect.php');
$errmsg_arr = array();
$errflag = false;

$name = $_POST['name'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];

$sql = "INSERT INTO suggestion (name,subject,comment) VALUES (:a,:b,:c)";
$q = $db->prepare($sql);
$q->execute(array(':a' => $name, ':b' => $subject, ':c' => $comment));
header("location: contact.php");
$errmsg_arr[] = 'Komentar Anda berhasil dikirim.';
$errflag = true;
if ($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: index.php?ask=". base64_encode("contact"));
    exit();
}
?>