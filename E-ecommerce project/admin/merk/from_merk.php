<?php 
require_once '../dbtokomotor.php';
?>
            
<form method="POST" action="proses_merk.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control"
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">merk</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>
 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="proses" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>