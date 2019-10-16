<?php
$link = mysql_connect('localhost','root','root');

if (!$link){
	die('Not connected : '.mysql_error());
}

$db_selected = mysql_select_db('bddprojet',$link);

if (!$db_selected){
	die('Base inaccesible : '.mysql_error());
}
?>