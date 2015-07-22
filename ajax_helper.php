<?php
$msg = $_REQUEST['action'];
if($msg == "backup")
{
	$server=$_POST["server"];
	$user="root";
	$pass="root";
	$var=array();
	$result=array();
	$con=mysql_connect($server,$user,$pass);
	$sql="SHOW DATABASES";
	$res=mysql_query($sql);
	if($res)
	{
	while($row=mysql_fetch_array($res))
	{
	array_push($var,$row);
	}

	$result['error']=0;
	$result['value']=$var;
   }
   else
   {
   	 $result['error']=1;

   }
	echo json_encode($result);
}
	$msg = $_REQUEST['action'];
	if($msg == "backup_button")
	{
	define("BACKUP_PATH", "C:\\xampp\htdocs\backup\\");
	$db_name=$_POST["db_name"];
	$HOST="localhost";
	$DBUSER="root";
	$DBPASSWD="root";
	$DATABASE=$db_name;
	$date_string   = date("Y-m-d");
	$cmd = "mysqldump --routines -h {$HOST} -u {$DBUSER} -p{$DBPASSWD} {$DATABASE} > " . BACKUP_PATH . "{$date_string}_{$DATABASE}.sql";
	exec($cmd);
	echo json_encode($cmd);
}
?>