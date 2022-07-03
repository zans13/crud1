<?php
		$nama 		= $_POST['nama'];
		$instansi 	= $_POST['instansi'];
		$nohp		= $_POST['nohp'];
		$email 		= $_POST['email'];
		$permohonan = $_FILES['permohonan']['name'];
        $sk_pangkat = $_FILES['sk_pangkat']['name'];
        $sk_jabatan = $_FILES['sk_jabatan']['name'];
        $surat_pendukung = $_FILES['surat_pendukung']['name'];
		$mysqli->query("INSERT INTO tb_cuti_alasanpenting SET nama='$nama',instansi='$instansi',nohp='$nohp',email='$email',permohonan='$permohonan',sk_pangkat='$sk_pangkat',sk_jabatan='$sk_jabatan',surat_pendukung='$surat_pendukung'");
		move_uploaded_file($_FILES['permohonan']['tmp_name'], 'dokumen/cuti_alasanpenting/permohonan/'.$permohonan);
        move_uploaded_file($_FILES['sk_pangkat']['tmp_name'], 'dokumen/cuti_alasanpenting/sk_pangkat/'.$sk_pangkat);
        move_uploaded_file($_FILES['sk_jabatan']['tmp_name'], 'dokumen/cuti_alasanpenting/sk_jabatan/'.$sk_jabatan);
        move_uploaded_file($_FILES['surat_pendukung']['tmp_name'], 'dokumen/cuti_alasanpenting/surat_pendukung/'.$surat_pendukung);
		header('location:?page=cuti_alasanpenting');
?>
