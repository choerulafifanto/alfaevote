<?php
include "conn.php";
function generatePassword($length=9, $strength=0) {
    $vowels = 'aeuyAEUY';
    $consonants = 'bdghjmnpqrstvzBDGHJLMNPQRSTVWXZ';
    if ($strength & 1) {
        $consonants .= 'BDGHJLMNPQRSTVWXZ';
    }
    if ($strength & 2) {
        $vowels .= "AEUY";
    }
    if ($strength & 4) {
        $consonants .= '23456789';
    }
    if ($strength & 8) {
        $consonants .= '@#$%';
    }
 
    $password = '';
    $alt = time() % 2;
    for ($i = 0; $i < $length; $i++) {
        if ($alt == 1) {
            $password .= $consonants[(rand() % strlen($consonants))];
            $alt = 0;
        } else {
            $password .= $vowels[(rand() % strlen($vowels))];
            $alt = 1;
        }
    }
    return $password;
}

for($i=1; $i<4000; $i++){
	$cuk = generatePassword(5,4);
	$nama = "STIS";
	$angka = $i;
	while( strlen($angka) < 4  ) $angka = '0' . $angka;
	$nama .= $angka;
	
	$tingkatberapa;
	if( $i<=1000 ){ $cuk = '1' . $cuk; $tingkatberapa = '1';}
	else if( 1000<$i && $i<=2000 ){ $cuk = '2' . $cuk; $tingkatberapa = '2';}
	else if( 2000<$i && $i<=3000 ){ $cuk = '3' . $cuk; $tingkatberapa = '3';}
	else{ $cuk = '4' . $cuk; $tingkatberapa = '4';}
	
	$insert=mysql_query("insert into siswa values('','$nama','$tingkatberapa','','$cuk','belum')");
	echo "$nama $cuk<br/>";
	//UPDATE siswa SET status='belum'
}
?>