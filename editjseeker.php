<!DOCTYPE html>
<html>
<head>
	<title></title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<?php $jid=$_GET['jid'];
		
		include 'conn.php';

	$query="SELECT * FROM `viewjseeker` where jid='$jid'";
	$result=mysqli_query($con,$query);
	$json_data=array();
	while($row=mysqli_fetch_assoc($result)){
		$jname=$row['jname'];
		$email=$row['email'];
		$password=$row['password'];
	}
	
	?>
		<form>
			<input type="hidden" name="jid" value="<?php echo $jid?>" id="jid">
	<label>Enter Name</label><input  class="form-control" type="text" id="jname" name="jname" value="<?php echo $jname?>"><br>
	<label>Enter email</label><input  class="form-control" type="email" id="email" name="email"  value="<?php echo $email?>"><br>
	<label>Enter password</label><input  class="form-control" type="password" id="password"  value="<?php echo $password?>" name="password"><br>
	<button type="button" id="btn">Submit</button>
</form>

<script type="text/javascript">
	$(function(){
		$('#btn').click(function(){
			var jname=document.getElementById('jname').value;
                var jid=document.getElementById('jid').value;
                var email = document.getElementById('email').value;
                var password = document.getElementById('password').value;              
                alert(jid);
                $.ajax({
                    url:"updatejseeker.php",
                    type:"post",
                    data:{
                        "jname":jname,
                        "email":email,
                        "password":password,
                        "jid":jid
                    },
                    success:function(data){
                       alert(data)   
                        
                    },
                    error:function(data){
                    	alert('not right')
                    }
                });
		})
  			
	})
        		
              
        
</script>
</body>
</html>