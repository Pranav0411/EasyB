<?php
include 'formcon.php';
if(isset($_POST['submit']))
{
	
	$email=$_POST['username'];
	$pass=password_hash($_POST['password'],PASSWORD_BCRYPT);
	$rpass=password_hash($_POST['confirmpassword'],PASSWORD_BCRYPT);
	

	$emailquery="select * from signup where email='$email'";
	$query=mysqli_query($con,$emailquery);

	$ecount=mysqli_num_rows($query);

	if($ecount>0)
	{
		echo "Email already exist";
	}
	else
	{
    	if($_POST['password'] === $_POST['confirmpassword'])
    	{
			$iq="insert into signup(email,pass,repass) values('$email','$pass','$rpass')";
			$res=mysqli_query($con,$iq);
			if($res)
			{
?>
    		 	<script>
     			alert("Data inserted Properly");
     			
     			</script>
<?php
	 		}
	 		else
	 		{
?>
	 			<script>
	 			alert("Insertion Failed");
	 			</script>
<?php
	 		}
	 	}
	 	else
	 	{
	 		echo "Password doesnot match";
	 	}


	}
}
?>