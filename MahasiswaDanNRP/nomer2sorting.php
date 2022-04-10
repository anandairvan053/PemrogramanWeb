<?php 
$nrpasc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");asort($nrpasc);
$namaasc = array("Zainal Misbah","Selena Pertiwi","Brilian Kurniawan","Mega Liza","Sri Haspiah","Mirna Solihah","Firdaus Izza","Melisa Mediana","Sholikin Alfaridzi","Khofifah Ningrum","Siti Nur","Virgin Shihabudin","Risdianto Muklis","Supriardi Nuris","Sutomo Aliandi","Aliando Syarif","Reva Subianto","Sigit Bakrudin","Sugianto Wicaksono","Rudi Soleh","Muhammad Rizal","Suprianto Sucipto","Sandara Kekasih","Sinta Sulis","Amelia Puspita","Siska Putri","Burhan Udin","Rizki Kurnia","Rizka Afifah","Wilson Wicaksana");
asort($namaasc);
$nrpdesc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");rsort($nrpdesc);
$namadesc= array("Zainal Misbah","Selena Pertiwi","Brilian Kurniawan","Mega Liza","Sri Haspiah","Mirna Solihah","Firdaus Izza","Melisa Mediana","Sholikin Alfaridzi","Khofifah Ningrum","Siti Nur","Virgin Shihabudin","Risdianto Muklis","Supriardi Nuris","Sutomo Aliandi","Aliando Syarif","Reva Subianto","Sigit Bakrudin","Sugianto Wicaksono","Rudi Soleh","Muhammad Rizal","Suprianto Sucipto","Sandara Kekasih","Sinta Sulis","Amelia Puspita","Siska Putri","Burhan Udin","Rizki Kurnia","Rizka Afifah","Wilson Wicaksana");
rsort($namadesc);

// ASC
echo "<p>_________________________________________ASC_______________________________________________<p>";


function dataMhsasc($nrpasc,$namaasc){
	for ($i=0; $i <30 ; $i++) { 
	echo "<p>NRP $nrpasc[$i]<p>";
	echo "<p>Nama $namaasc[$i]<p>";
	echo "<hr>";
	
	}

}
dataMhsasc($nrpasc,$namaasc);

// DESC
echo "<p>_________________________________________DESC_______________________________________________<p>";

function dataMhsDesc($nrpdesc,$namadesc){
for ($i=0; $i <29 ; $i++) { 
	echo "<p>NRP $nrpdesc[$i]<p>";
	echo "<p>Nama $namadesc[$i]<p>";
	echo "<hr>";
	
	}


}
dataMhsasc($nrpdesc,$namadesc);

 ?>

