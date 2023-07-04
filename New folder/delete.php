<?php
include("connection.php");
$id = $_GET['id'];
$query="DELETE FROM mp WHERE id='$id'";
$data=mysqli_query($db,$query);
if($data)
{
    echo "record delete";
    ?>
   <meta http-equiv ="refresh" content="0; url=http://localhost/curd/display.php"/>


    <?php

}else{
    echo "failed";
}



?>