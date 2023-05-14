<?php 
require_once '../dbtokomotor.php';
?>
<?php 
   $_id = $_POST['kode'];
   $_nama_motor = $_POST['nama'];
   $_cc = $_POST['cc'];
   $_harga = $_POST['harga'];
   $_merk_id = $_POST['merk'];
   $_stok = $_POST['stok'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_cc;// 3
   $ar_data[]=$_harga;
   $ar_data[]=$_merk;
   $ar_data[]=$_stok;
  

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