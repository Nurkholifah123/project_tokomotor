<?php 
require_once '../dbtokomotor.php';
?>
<?php 
   $_id = $_POST['kode'];
   $_nama_pelanggan = $_POST['nama'];
   $_alamat_pelanggan = $_POST['alamat'];
   $_motor_id = $_POST['motor'];
   $_quantity = $_POST['quantity'];
   

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_alamat;// 3
   $ar_data[]=$_motor;
   $ar_data[]=$_quantity;
   
  

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO merk (kode,nama,cc,harga,merk,stok) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE merk SET kode=?,nama=?,cc=?,harga=?,merk=?, WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_merk.php');
?>