<?php 
	$id = $_GET["id"];
	$hapus = $mysqli->query("SELECT * FROM tb_cuti_alasanpenting WHERE id ='$_GET[id]'");
	// memilih untuk dihapus
	$namaDokumen = mysqli_fetch_array($hapus);
	// nama field
	$lokasi = $namaDokumen["permohonan"]["sk_pangkat"]["sk_jabatan"]["surat_pendukung"];
	// alamat tempat
	$hapusDokumen = "dokumen/cuti_alasanpenting/permohonan/$lokasi";
	$hapusDokumen = "dokumen/cuti_alasanpenting/sk_pangkat/$lokasi";
	$hapusDokumen = "dokumen/cuti_alasanpenting/sk_jabatan/$lokasi";
    $hapusDokumen = "dokumen/cuti_alasanpenting/surat_pendukung/$lokasi";
	// untuk menghapus dari folder
	unlink($hapusDokumen);
	$mysqli->query("DELETE FROM tb_cuti_alasanpenting WHERE id ='$_GET[id]'");
	header('location:?page=cuti_alasanpenting');

 ?>
 