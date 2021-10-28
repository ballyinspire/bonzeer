<?php
		if(!empty($_POST['txtuname']) && !empty($_POST['txtemail']) && !empty($_POST['txtpassword']) && !empty($_POST['txtcpassword']))
		  {
			$Username = mysql_real_escape_string($_POST['txtuname']);
			$Email = mysql_real_escape_string($_POST['txtemail']);
			$Password = mysql_real_escape_string($_POST['txtpassword']);
			$Conpassword = mysql_real_escape_string($_POST['txtcpassword']);
			$Password_hash = md5($Password);
			
			if($Password != $Conpassword)
			{
				echo "<font color='red'><p>Passwords do not match.</p></font>";
			}
			else{
				$query = mysql_query("select * FROM UsersRegistration WHERE Email = '".$Email."'");
				if(mysql_num_rows($query) == 1)
				{
					echo "<font color='red'><p>The Email address '".$Email."' already exists .</p></font>";
				}
				else{
					$query = mysql_query(" INSERT INTO Registration(UserID,UserName,Email,Password) VALUES ('','".$Username."','".$Email."','".$Password_hash."')");
					if($query)
					{
						echo "<font color='green'><p>Account Successfully Created.</p></font>.";
					}
					else{
						echo "<font color='red'><p>Sorry your registration failed. Please try again</p></font>";
			}
		  }	
	    }
	  }	
?>