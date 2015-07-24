<?php

//fetching database names in localhost server
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

//Code to take the dump of selected database

elseif($msg == "backup_button")
	{
		define("BACKUP_PATH", "C:\\xampp\htdocs\backup\dbbackup\\");
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

//displaying files which are took dump

elseif($msg=="show")
	{
	
		$dir = "C:\\xampp\htdocs\backup\dbbackup\\"; // Directory where files are store
		if ($dir_list = opendir($dir))
				{
				while(($filename = readdir($dir_list)) != false)
					{
						if($filename=="." || $filename=="..")
						{
							continue;
						}
					echo "<div class='padding'>";
					echo "<input  type='checkbox' name='check' id='check_".$filename."' value='".$filename."'>";
					echo " ".$filename; 
					echo "</div>";
					}										
				}  
       
	}

//Removing dump files

if($msg=="delete")
	{
		$filenamearr=array();
		$filenamearr=$_REQUEST['id'];
		$dir = "C:\\xampp\htdocs\backup\dbbackup\\";
		foreach ($filenamearr as $val) 
		{
			$file_name=$dir.$val;
			unlink($file_name);
		}

	}

?>