<a href="?page=cuti_alasanpenting&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px; " ><i class="fa fa-plus" style="margin-right: 7px;"> </i>Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Cuti Alasan Penting
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
											<th>Instansi</th>
											<th>No HP / WA</th>
											<th>Email</th>
											<th>Form Permohonan Cuti</th>
											<th>SK Pangkat Terakhir</th>
											<th>SK Jabatan Terakhir</th>
                                            <th>Surat Pendukung Sesuai Alasan Yang Diajukan</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
                                    	<?php
										 	$cuti_alasanpenting = $mysqli->query("SELECT * FROM tb_cuti_alasanpenting ");
										 	$no = 0;
										 	while( $m = $cuti_alasanpenting->fetch_assoc()){
											$no++;
										 ?>

                                    	<tr>
                                    		<th scope="row"><?= $no; ?></th>
										  	<td><?= $m["nama"]; ?></td>
										  	<td><?= $m["instansi"]; ?></td>
										  	<td><?= $m["nohp"]; ?></td>
										  	<td><?= $m["email"]; ?></td>
										  	<td><a href="dokumen/cuti_alasanpenting/permohonan"><?= $m["permohonan"]; ?></a></td>
										  	<td><a href="dokumen/cuti_alasanpenting/sk_pangkat"><?= $m["sk_pangkat"]; ?></a></td>
                                            <td><a href="dokumen/cuti_alasanpenting/sk_jabatan"><?= $m["sk_jabatan"]; ?></a></td>
                                            <td><a href="dokumen/cuti_alasanpenting/surat_pendukung"><?= $m["surat_pendukung"]; ?></a></td>
										  	<td>
										  		<a href="?page=cuti_alasanpenting&aksi=details&id=<?php echo $m['id'];?>" class="btn btn-success">Details <i class="fa fa-info-circle text-white"></i></a></button>
										  		<a href="?page=cuti_alasanpenting&aksi=edit&id=<?php echo $m['id'];?>" class="btn btn-info">Edit <i class="fa fa-edit text-white"></i></a></button>
												<a href="?page=cuti_alasanpenting&aksi=delete&id=<?php echo $m['id']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus data ini?');">Hapus <i class="fa fa-trash text-white"></i></a>
										  	</td>
										  <?php } ?>
                                    	</tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="./laporan/laporan_cutialasanpenting_exel.php" class="btn btn-default" target="blank" style="margin-top: 10px; "><i class="fa fa-print" style="margin-right: 7px;"> </i>ExportToExcel</a>
