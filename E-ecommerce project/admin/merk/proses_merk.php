<?php 
require_once '../dbtokomotor.php';
?>
<?php 
   $_id = $_POST['id'];
   $_nama_motor = $_POST['merk'];
   

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_merk; // ? 2
  
  

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO merk (id,nama) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE merk SET id=?,nama=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_merk.php');
?>
