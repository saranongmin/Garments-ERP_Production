<?php 
	session_start();
					if($_SESSION['signin']=="Sign In"){
	$db = mysqli_connect('localhost','root','','production')
				or die('Error connecting to MySQL server.');


	if(isset($_GET['delete'])) {
    	$id = $_GET['delete'];
    	$deletesql="DELETE  FROM batch_info WHERE id='".$id."' ";

            if (mysqli_query($db,$deletesql)){
                    
                echo '<script type="text/javascript">alert("Information Delete Successfully")</script>';
                header("refresh:0; url=batch_info_view.php") ;
            }
    }

		
			}
					else{
						header("Location: logout2.php");
					}
		
		?>