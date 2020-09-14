
<?php
	if(isset($_POST['signin']))
	{
		$db = mysqli_connect('localhost','root','','production')
			or die('Error connecting to MySQL server.');
			
		session_start();
			$_SESSION['signin']=$_POST['signin'];
			$username=$_POST['uname'];
			$_SESSION['username'] =$username;
			$password=$_POST['password'];
			$_SESSION['Password']=$password;

		$sql = "SELECT * FROM admin";
		
		$result = mysqli_query($db, $sql);
			while($row=mysqli_fetch_array($result))
			{
				$user=$row['user_name']; 
				$pass=$row['password'];
			}
		$num=mysqli_num_rows($result);
			for($i=1;$i<=$num; $i++){

				if($_SESSION['username'] == $user && $password==$pass)
				{
					echo("Successfully  SingIn ...");

					header("refresh:3; url=projects.php");
				}
				else if($password != $pass ||$_SESSION['username']!= $user )
				{
					echo("Please Enter Correct Username and Password ...");
					header("refresh:3; url=login.html");
				}
			}
	}
 ?> 
