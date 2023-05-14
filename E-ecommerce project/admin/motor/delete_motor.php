<?php 
require_once '../dbtokomotor.php';
$_iddel=$_GET['iddel'];
$sql="DELETE FROM motor WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location:list_motor.php');
?>