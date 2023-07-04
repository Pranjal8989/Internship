<?php 
$servername= "localhost";
$username = "root";
$password="";
$dbname= "informationform";
	
$db = mysqli_connect($servername, $username, $password, $dbname);
if($db)
    {
    //  echo"connection ok";
    }
else
    {
        echo"connection failed";
    }

?>
<?php
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$mobileno=$_POST['mobileno'];
$address=$_POST['place'];
mysqli_query($db,"INSERT INTO mp(id,fname,lname,gender,mobileno,place) VALUES('$id', '$fname','$lname','$gender','$mobileno','$address')");
header('location: index.php');
}
?>