<?php
include("connection.php");
$query="select * FROM mp"; 
// take data from database
$data= mysqli_query($db,$query);
$total= mysqli_num_rows($data);
//count rows in given database
//echo $total;
echo "<br>";
if($total !=0)
{
    ?>
    <h2 align=" center"> <mark>display record</h2></mark>
<table border= "2" cellspacing="5" width="90%" align="center">
    <tr>
<th width="5%">id</th>
<th width="15%"> First name</th>
<th width="15%" > Last name</th>
<th width="5%"> Gender</th>
<th width="10%"> Mobile no.</th>
<th width="25%"> place </th>

<th width="25%"> opreation</th>
</tr>


<?php
   // $result = mysqli_fetch_assoc($data);
    //echo var_dump($result);
    //we can fetch in better way using while loop
    while($result = mysqli_fetch_array($data))
    {
       // echo var_dump($result);
        //var_dump contain information about more than one variable
       echo "  <tr>
       <td> ".$result ['id']."</td>
       <td> ".$result ['fname']."</td>
       <td>".$result['lname']." </td>
       <td>".$result['gender']." </td>
       <td> ".$result['mobileno']."</td>
       <td> ".$result['place']." </td>
      <td><a href='update.php?id=$result[id]'><input type='submit'value='update' class='update' ></a>
      <a href='delete.php?id=$result[id]'><input type='submit'value='delete' class='delete' onclick='return checkdelete()' ></a></td>
      
       </tr>";
    }
}
?>
</table>
<html>
    <head>
        <title>display</title>
        <style>
        body
      {
        background:blue;
      }
      table
      {
        background-color:white;
      }
    .update{
      background-color:green;
      color:white;
    }
    .delete{
      background-color:red;
      color:white;
    }

    </style>
</head>
</html>
<script >
function checkdelete()
{
  return confirm('are you sure wants to delete?');
}


</script>

