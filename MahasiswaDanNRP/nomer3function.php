<?php 
$nrp = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");

$nama = array("Zainal Misbah","Selena Pertiwi","Brilian Kurniawan","Mega Liza","Sri Haspiah","Mirna Solihah","Firdaus Izza","Melisa Mediana","Sholikin Alfaridzi","Khofifah Ningrum","Siti Nur","Virgin Shihabudin","Risdianto Muklis","Supriardi Nuris","Sutomo Aliandi","Aliando Syarif","Reva Subianto","Sigit Bakrudin","Sugianto Wicaksono","Rudi Soleh","Muhammad Rizal","Suprianto Sucipto","Sandara Kekasih","Sinta Sulis","Amelia Puspita","Siska Putri","Burhan Udin","Rizki Kurnia","Rizka Afifah","Wilson Wicaksana");
asort($nama);
$dosen =  array("Desy Intan Permatasari");
$kelas=array("D4-A","D4-B" );
$nilai= array("A");
$aktif = array("HIMTI");
function Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif){
	for ($i=0; $i <15 ; $i++) {
	echo "<p>user $nrp[$i]<p>";	
	echo "<p>namaMhs :	$nama[$i]<p>";
	echo "<p>namaKelasMhs	: $kelas[0]<p>";
	echo "<p>namaDosen	: $dosen[0]<p>";
	echo "<p>nilai :	 $nilai[0]<p>";
	echo "<p>Mahasiswa Aktif Dihimti :	$aktif[0]  <p>";
	echo "<hr>";


}
	for ($q=15; $q <30 ; $q++) {
	echo "<p>user $nrp[$q]<p>";	
	echo "<p>namaMhs :	$nama[$q]<p>";
	echo "<p>namaKelasMhs	: $kelas[1]<p>";
	echo "<p>namaDosen	: $dosen[0]<p>";
	echo "<p>nilai :	 $nilai[0]<p>";
	echo "<p>Mahasiswa Aktif Dihimti :	$aktif[0]  <p>";
	echo "<hr>";


}
	
}
Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif);


 ?>