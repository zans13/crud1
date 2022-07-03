
<a href="?page=cuti_alasanpenting" class="btn btn-danger" style="float: right;">X</a></button>
<div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
									<form name="form_cuti_alasanpenting" action="?page=cuti_alasanpenting&aksi=create" method="post" enctype="multipart/form-data">
										
										<div class="form-group">
											<label for="nama">Nama</label>
											<input type="text" class="form-control" id="nama" placeholder="Input Nama Anda" name="nama" required>
										</div>
										
										<div class="form-group">
											<label for="instansi">Instansi</label>
											<input type="text" class="form-control" id="instansi" placeholder="Input Instansi Anda" name="instansi" required>
										</div>
										
                                        <div class="form-group">
											<label for="nohp">No HP/Wa</label>
											<input type="text" class="form-control" id="nohp" placeholder="Masukan No HP / WA Anda" name="nohp" required>
										</div>

                                        <div class="form-group">
											<label for="email">Email</label>
											<input type="email" class="form-control" id="email" placeholder="Masukan Alamat Email Anda" name="email" required>
										</div>


										<div class="form-group">
											<label for="permohonan">Form Permohonan Cuti</label>
											<input type="file" class="form-control" id="permohonan" name="permohonan" required>Format PDF
										</div>

                                        <div class="form-group">
											<label for="sk_pangkat">SK Pangkat Terakhir</label>
											<input type="file" class="form-control" id="sk_pangkat" name="sk_pangkat" required>Format PDF
										</div>

                                        <div class="form-group">
											<label for="sk_jabatan">SK Jabatan Terakhir</label>
											<input type="file" class="form-control" id="sk_jabatan" name="sk_jabatan" required>Format PDF
										</div>

                                        <div class="form-group">
											<label for="surat_pendukung">Surat Pendukung Sesuai Alasan Yang Diajukan</label>
											<input type="file" class="form-control" id="surat_pendukung" name="surat_pendukung" required>Format PDF
										</div>

										<div class="form-group">
										<button type="submit" class="btn btn-primary">Tambah</button>
											<button type="reset" class="btn btn-danger">Reset</button>
										</div>
</form>
      </div>
    </div>
  </div>
</div>