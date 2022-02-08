<?php
//core
function dbcon(){
	$user = "tumutech";
	$pass = "2020bse066/ps";
	$host = "localhost";
	$db = "cims";
	@mysqli_pconnect($host,$user,$pass);
	mysqli_select_db($db);
}

function host(){
	$h = "http://".$_SERVER['HTTP_HOST']."/cimsdb/";
	return $h;
}

function hRoot(){
	$url = $_SERVER['DOCUMENT_ROOT']."/cimsdb/";
	return $url;
}

//parse string
function gstr(){
    $qstr = $_SERVER['QUERY_STRING'];
    parse_str($qstr,$dstr);
    return $dstr;
}

?>
