<?php
include ('../../../core/koneksi.php');
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"DELETE FROM tenaga_medis WHERE id_tenaga_medis = $id");
if($sql){
	header("location:../table_tenaga_medis.php");
 }
?>