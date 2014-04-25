<?php
header('Content-type: application/json');
/***********
$tabla
101=restaurantes
102=eventos
103=servicios_profesionales
104=noticias

$filtro
10=restaurantes
20=eventos
30=servicios_profesionales
40=noticias
***********/
$server = "sql112.eshost.es";
$username = "eshos_13421377";
$password = "dvcq257w";
$database = "eshos_13421377_210712";

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());
mysql_select_db($database, $con);

$sql = "SELECT id, titulo, mensaje FROM App ORDER BY id";
$result = mysql_query($sql) or die ("Query error: " . mysql_error());

$records = array();

while($row = mysql_fetch_assoc($result)) {
	$array = array_map("utf8_encode", $row); 
	$records[] = $array;
}

mysql_close($con);

echo $_GET['jsoncallback'] . '({"data":' . json_encode($records) . '});';
?>