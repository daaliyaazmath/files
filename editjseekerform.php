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
	<?php $id=$_GET['id'];
		
		include 'conn.php';

	$query="SELECT * FROM `jseekerform` where id='$id'";
	$result=mysqli_query($con,$query);
	$json_data=array();
	while($row=mysqli_fetch_assoc($result)){
		$fullname=$row['fullname'];
		$address=$row['address'];
		$city=$row['city'];
		$state=$row['state'];
		$pincode=$row['pincode'];
		$country=$row['country'];
		$email=$row['email'];
		$suggestions=$row['suggestions'];
	}
	
	?>
		<form>
			<input type="hidden" name="id" value="<?php echo $id?>" id="id">
	<label>Enter fullname</label><input  class="form-control" type="text" id="fullname" name="fullname" value="<?php echo $fullname?>"><br>
	<label>Enter address</label><input  class="form-control" type="text" id="address" name="address" value="<?php echo $address?>"><br>
	<label>Enter city</label><input  class="form-control" type="text" id="city" name="city" value="<?php echo $city?>"><br>
	<label>Enter state</label><input  class="form-control" type="text" id="state" name="state" value="<?php echo $state?>"><br>
	<label>Enter pincode</label><input  class="form-control" type="text" id="pincode" name="pincode" value="<?php echo $pincode?>"><br>
	<label>Enter country</label><input  class="form-control" type="text" id="country" name="country" value="<?php echo $country?>"><br>
	<label>Enter email</label><input  class="form-control" type="email" id="email" name="email"  value="<?php echo $email?>"><br>
	<label>Enter suggestions</label><input  class="form-control" type="text" id="suggestions"  value="<?php echo $suggestions?>" name="suggestions"><br>
	<button type="button" id="btn">Submit</button>
</form>

<script type="text/javascript">
	$(function(){
		$('#btn').click(function(){
			var fullname=document.getElementById('fullname').value;
                var id=document.getElementById('id').value;
                var address=document.getElementById('address').value;
                var city=document.getElementById('city').value;
                var state=document.getElementById('state').value;
                var pincode=document.getElementById('pincode').value;
                var country=document.getElementById('country').value;
                var email = document.getElementById('email').value;
                var suggestions = document.getElementById('suggestions').value;               
                alert(id);
                $.ajax({
                    url:"updatejseekerform.php",
                    type:"post",
                    data:{
                        "fullname":fullname,
                        "address":address,
                        "city":city,
                        "state":state,
                        "pincode":pincode,
                        "country":country,
                        "email":email,
                        "suggestions":suggestions,
                        "id":id
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