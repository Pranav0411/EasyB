 <?php
       session_start();
        include 'formcon.php';
        
 if(isset($_POST['submit']))
	{
		$email=$_POST['username'];
		$pass=$_POST['passw'];

		$esearch="select * from signup where email='$email'";
		$query=mysqli_query($con,$esearch);

		$ec=mysqli_num_rows($query);

	

		if($ec)
		{
			
			$epass=mysqli_fetch_assoc($query);
			$fpass=$epass['pass'];
			$_SESSION['uname'] =$epass['email'] ;
			$qpass=password_verify($pass,$fpass);
			
			if($qpass)
			{
				
	
	
	?>
				
				<script>
		alert("Login successful");

				</script>
					
        
       
	
	<?php
	      header('location:mainpage.php');
	   
			}
			else
			{
	?>
				<script>
					alert("Password Incorrect");
				</script>
	<?php
			}
		}
		else
		{
			echo "Invalid email";
		}
	}
?>
