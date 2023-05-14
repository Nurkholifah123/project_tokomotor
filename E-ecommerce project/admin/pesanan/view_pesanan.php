<?php 
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM vendor WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>  <td>nama_pelanggan</td><td><?=$row['nama']?></td></tr>
        <tr>   <td>alamat_pelanggan</td><td><?=$row['alamat']?></td></tr>
        <tr>   <td>motor_id</td><td><?=$row['motor_id']?></td></tr>
        <tr>   <td>quantity</td><td><?=$row['quantity']?></td></tr>
       
    </tbody>
</table>