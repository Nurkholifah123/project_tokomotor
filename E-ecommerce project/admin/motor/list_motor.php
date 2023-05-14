<?php 
    require_once '../dbtokomotor.php';
?>
<?php 
   $sql = "SELECT * FROM merk";
   $rs = $dbh->query($sql);
?>
    <div class="container">
      <a class="btn btn-success" href="form_merk.php" role="button">Create Produk</a>
      <a class="btn btn-primary" href="../produk/list_produk.php" role="button">produk</a>
      <a class="btn btn-primary" href="../merk/list_pelanggan.php" role="button">merk</a>
      <a class="btn btn-primary" href="../motor/list_merk.php" role="button">motor</a>
      <a class="btn btn-primary" href="../pesanan/list_merk.php" role="button">pesanan</a>
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>cc</th>
                    <th>harga</th>
                    <th>merk_id</th>
                    <th>stok</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['id']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['cc']?></td>
                        <td><?=$row['harga']?></td>
                        <td><?=$row['merk']?></td>
                        <td><?=$row['stok']?></td>
                        


<a class="btn btn-primary" href="view_merk.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-warning" href="edit_merk.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-danger" href="delete_merk.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
        </div>