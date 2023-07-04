<?php
 include("connection.php"); 
	if (isset($_POST['update'])) 
	{
		$id=$_POST['id'];
		$fname=$_POST['fname'];
        $lname=$_POST['lname'];
		$gender=$_POST['gender'];
		$mobileno=$_POST['mobileno'];
		$place=$_POST['place'];
     $query="UPDATE mp SET fname='$fname',lname='$lname',gender='$gender',mobileno='$mobileno',place='$place' WHERE id='$id'";
	 $data= mysqli_query($db,$query);
	}
	
?>