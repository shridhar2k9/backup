<?php

//fetching database names in localhost server
$msg = $_REQUEST['action'];
//$id = $_REQUEST["ids"];
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
							//$id=$row['id'];
						echo "<div>";
						echo "<input type='checkbox'name='check'>";
						echo $filename; 
						echo "</div>";
						

						}										
						}  
       
				      	

}
// if($id==$row['id']);
//            {
//              rmdir($dir_list);
//            } 
?>