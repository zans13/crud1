<?php 
	$id = $_GET["id"];
	$edit = $mysqli->query("SELECT * FROM tb_cuti_alasanpenting WHERE id =$id");
	$e = mysqli_fetch_array($edit);
 ?>

 <div class="panel panel-default">
 <a href="?page=cuti_alasanpenting" class="btn btn-danger" style="float: right;">X</a></button>
                        <div class="panel-heading">
                            Edit Cuti Alasan Penting
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">	
                                	<form name="form_cuti_alasanpenting" action="?page=cuti_alasanpenting&aksi=update" method="post" enctype="multipart/form-data">
									 	<div class="form-group">
									 		<label for="nama">Nama</label>
											<input type="hidden" name="id" value="<?= $e["id"]; ?>">
									 		<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pegawai" value="<?= $e["nama"]; ?>" required>
									 	</div>

									 	<div class="form-group">
									 		<label for="instansi">Instansi</label>
									 		<input type="text" class="form-control" id="instansi" name="instansi" placeholder="Instansi Pegawai" value="<?= $e["instansi"]; ?>" required>
									 	</div>

									 	<div class="form-group">
									 		<label for="nohp">No HP / WA</label>
									 		<input type="text" class="form-control" id="nohp" name="nohp" placeholder="No HP / WA Pegawai" value="<?= $e["nohp"]; ?>" required>
									 	</div>

									 	<div class="form-group">
									 		<label for="email">Email</label>
									 		<input type="email" class="form-control" id="email" name="email" placeholder="Email Pegawai" value="<?= $e["email"]; ?>" required>
									 	</div>

									 	<div class="form-group">
									 		<label for="permohonan">Form Permohonan Cuti</label>
									 		<input type="file" class="form-control" id="permohonan" name="permohonan">
									 		<span><?= $e["permohonan"]; ?></span>
									 	</div>

                                         <div class="form-group">
									 		<label for="sk_pangkat">SK Pangkat Terakhir</label>
									 		<input type="file" class="form-control" id="sk_pangkat" name="sk_pangkat">
									 		<span><?= $e["sk_pangkat"]; ?></span>
									 	</div>

                                         <div class="form-group">
									 		<label for="sk_jabatan">SK Jabatan Terakhir</label>
									 		<input type="file" class="form-control" id="sk_jabatan" name="sk_jabatan">
									 		<span><?= $e["sk_jabatan"]; ?></span>
									 	</div>

                                         <div class="form-group">
									 		<label for="surat_pendukung">Surat Pendukung Sesuai Alasan Yang Diajukan</label>
									 		<input type="file" class="form-control" id="surat_pendukung" name="surat_pendukung">
									 		<span><?= $e["surat_pendukung"]; ?></span>
									 	</div>

									 	<div class="form-group">
									 		<button type="reset" class="btn btn-danger">Reset</button>
											<button type="submit" class="btn btn-primary">Perbarui</button>
									 	</div>

									 </form>