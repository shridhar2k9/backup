<!DOCTYPE html>
<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
		<title>Database Backup</title>
	
		<link rel='stylesheet' href='css/style.css'> 
	
<script>
//Ajax call to show the dump files

function show_directory()
	{
		$.ajax({
	             type:"post",
	             url:"ajax_helper.php",
	             data:{
	             	action : 'show',
	             },
	             success:function(data)
	             {
	               $('#show').html(data);
	             }
        		});
	}       
			
$(document).ready(function() {

show_directory(); 
			

$("#server").change(function() {

var server = $("#server").val();
var action="backup";
var parameters1={"server":server,"action":action};

		$.ajax({
				type:"post",
					url:"ajax_helper.php",
					dataType:'json',
					data:parameters1, 
					contentType: "application/x-www-form-urlencoded;charset=ISO-8859-15",
				beforeSend: function ( xhr ) {
						
				},                 
				 success:function(data) {
		 		 if(data.error=='1')
				   {
				              alert("error");
				   }
				   else
				   {
				     var append_string='';
				   		for(var i=0;i<data.value.length;i++)
				   		{
				        append_string+="<option value="+data.value[i].Database+">"+data.value[i].Database+"</option>";
				    	}
				     $('#database').html(append_string);

				   }
				}
		});
});
					
//Taking database dump

$("#backup").click(function() {

	var db_name =$("#database").val();

	if (db_name)
	{
		var action1="backup_button";
		var parameters2={"db_name":db_name,"action":action1};
		$.ajax({
				type:"post",
			 	url:"ajax_helper.php",
			 	dataType:'json',
			 	data:parameters2, 
			 	contentType: "application/x-www-form-urlencoded;charset=ISO-8859-15",
				success:function(data) {
					show_directory();
					alert("Database Backup successfully");
						}
				});
	}
});

//Deleting dump file

$("#drop").click(function() {
	var ids = [];
	$('input[type=checkbox]:checked').each(function(){
		ids.push(this.value);
	});
	
	$.ajax({
			type:"post",
			url:"ajax_helper.php",
			data:{
             	action : 'delete',
             	id : ids
             },
             success:function(data)
             {
               show_directory();
               alert("Backup Removed successfully");

             }

			});	
     });

});
</script>
</head>
<body class="padding_top">
       <div class="col-md-12 ">
         <div class="col-md-4 "></div>
            <div class="col-md-4 border" style="background-color:#66CCFF"id="border"><div class="text-center h3 "> BACKUP DATABASE </div>
                <p class="padding">Select Server</p>
                    <select id="server" class="form-control">
					<option  value='0'>Select Server</option>
					<option value="127.0.0.1">loacalhost</option>
					<option value='188......'>dev server</option>
					</select>
				
					<p  class="padding">Select Database To Backup</p>
					<select id="database"class="form-control"></select>
					<div id="show"name="show"clas="show"></div>
					<input type="submit" value="BACKUP" id="backup" name="backup" class="btn btn-primary border " />
					<input type="submit" value="DROP" id="drop" name="drop" class="btn btn-danger pull-right border" />      
			</div>
      <div class="col-md-4 "></div>
        </div>
   </body>	
</html>