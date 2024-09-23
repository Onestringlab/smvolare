<?php
function tampilHari($indexHari){
 $hari = array("Senin", "Selasa", "Rabu","Kamis","Jum'at","Sabtu","Minggu");
 echo $hari[$indexHari-1];
}

function tampilJam($jam){
  echo substr($jam, 0, 5);
}

function tampilTanggal($tanggal){
	$d = new DateTime($tanggal);
	echo $d->format('d M Y');
}

function tampilJam2($tanggal){
    $d = new DateTime($tanggal);
    echo $d->format('H:i');
}

function ambilTanggalJam(){
    $d = new DateTime();
    echo $d->format('d M Y H:i:s');
}

function ambilTanggal(){
    $d = new DateTime();
    echo $d->format('d M Y');
}


function tampilTanggalJam($tanggal){
	$d = new DateTime($tanggal);
	echo $d->format('d M Y H:i:s');
}

function tampilPotong($isi,$jumlah){
  echo substr($isi, 0, $jumlah);
}

function tanggalSQL($d){
	return date_format($d, 'Y-m-d');
}

function getActive($day){
    $d = new DateTime();
    if($day==date_format($d, 'N')){
        echo "in active";
    }
}

function ambilTanggalSQL($tanggal){
    $d = new DateTime($tanggal);
    return $d->format('d M Y');
}

function getClientIP() {

    if (isset($_SERVER)) {

        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
            return $_SERVER["HTTP_X_FORWARDED_FOR"];

        if (isset($_SERVER["HTTP_CLIENT_IP"]))
            return $_SERVER["HTTP_CLIENT_IP"];

        return $_SERVER["REMOTE_ADDR"];
    }

    if (getenv('HTTP_X_FORWARDED_FOR'))
        return getenv('HTTP_X_FORWARDED_FOR');

    if (getenv('HTTP_CLIENT_IP'))
        return getenv('HTTP_CLIENT_IP');

    return getenv('REMOTE_ADDR');
}
?>