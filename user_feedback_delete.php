<?php 

	$db = mysqli_connect('localhost','root','','production')
				or die('Error connecting to MySQL server.');


	if(isset($_GET['delete'])) {
    	$id = $_GET['delete'];
    	$deletesql="DELETE  FROM user_feedback WHERE id='".$id."' ";

            if (mysqli_query($db,$deletesql)){
                    
                echo '<script type="text/javascript">alert("Information Delete Successfully")</script>';
                header("refresh:0; url=user_feedback_view.php") ;
            }
    }
?>