<?php 
  $id = $_GET["id"];
  $details = $mysqli->query("SELECT * FROM tb_cuti_alasanpenting WHERE id ='$_GET[id]'");
  $d = mysqli_fetch_array($details);

 ?>

<div class="row" style="margin-top: 20px;">
  <div class="col-md-8">
  <div class="container">
    <div class="row justify-content-center">
      <a href="?page=cuti_alasanpenting" class="btn btn-default" style="margin-left: 20px;">kembali</a></button>
        <h2 class="bg-light p-2 rounded  text-center text-dark" style="color: black;"> Data Cuti Alasan Penting </h2>
        <hr class="my-3">
        
        <h6 class="text-dark text-center" style="font-size: 16px;">Nama         : <?= $d["nama"]; ?></h6>
        <h6 class="text-dark text-center" style="font-size: 16px;">Instansi     : <?= $d["instansi"]; ?></h6>
        <h6 class="text-dark text-center" style="font-size: 16px;">No HP / WA   : <?= $d["nohp"]; ?></h6>
        <h6 class="text-dark text-center" style="font-size: 16px;">Email        : <?= $d["email"]; ?></h6>
        <div class="text-center">
        Form Permohonan Cuti  :<a href="dokumen/cuti_alasanpenting/permohonan"><?= $d["permohonan"]; ?></a><br>
        SK Pangkat Terakhir   :<a href="dokumen/cuti_alasanpenting/sk_pangkat"><?= $d["sk_pangkat"]; ?></a><br>
        Sk Jabatan Terakhir   :<a href="dokumen/cuti_alasanpenting/sk_jabatan"><?= $d["sk_jabatan"]; ?></a><br>
        Surat Pendukung Sesuai Alasan Yang Diajukan       :<a href="dokumen/cuti_alasanpenting/surat_pendukung"><?= $d["surat_pendukung"]; ?></a><br>
        </div>
      </div>
    </div>
  </div>
  