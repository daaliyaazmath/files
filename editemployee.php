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
	<?php $eid=$_GET['eid'];
		
		include 'conn.php';

	$query="SELECT * FROM `viewemployee` where eid='$eid'";
	$result=mysqli_query($con,$query);
	$json_data=array();
	while($row=mysqli_fetch_assoc($result)){
		$ename=$row['ename'];
		$email=$row['email'];
		$password=$row['password'];
        $role=$row['role'];
	}
	
	?>
		<form>
			<input type="hidden" name="eid" value="<?php echo $eid?>" id="eid">
	<label>Enter Name</label><input  class="form-control" type="text" id="ename" name="ename" value="<?php echo $ename?>"><br>
	<label>Enter email</label><input  class="form-control" type="email" id="email" name="email"  value="<?php echo $email?>"><br>
	<label>Enter password</label><input  class="form-control" type="password" id="password"  value="<?php echo $password?>" name="password"><br>
	<label>Enter role</label><input  class="form-control" type="text" id="role"  value="<?php echo 
	$role?>" name="role"><br>
	<button type="button" id="btn">Submit</button>
</form>

<script type="text/javascript">
	$(function(){
		$('#btn').click(function(){
			var ename=document.getElementById('ename').value;
                var eid=document.getElementById('eid').value;
                var email = document.getElementById('email').value;
                var password = document.getElementById('password').value;
                var role = document.getElementById('role').value;               
                alert(eid);
                $.ajax({
                    url:"updateemployee.php",
                    type:"post",
                    data:{
                        "ename":ename,
                        "email":email,
                        "password":password,
                        "role":role,
                        "eid":eid
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