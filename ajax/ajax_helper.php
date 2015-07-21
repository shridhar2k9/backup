<?php
$msg=$_REQUEST['action'];
if($msg=='backup')
{
	$server=$_REQUEST['server'];
	$user="root";
	$pass="";
	$con=mysql_connect($server,$user,$pass);
	$sql="SHOW DATABASES";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	foreach ($row as $val) 
	{
		
		$var[$val]=$row['Database'];
	}
echo json_encode($var);
}
?>