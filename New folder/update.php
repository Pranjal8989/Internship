<?php 
include ("connection.php");
$id = $_GET['id'];
// echo $id;
// die();
$query="SELECT * FROM mp WHERE id='$id'"; 
// take data from database
$data= mysqli_query($db,$query);
$total= mysqli_num_rows($data);
$result = mysqli_fetch_array($data);
// print_r($result);
// die();
//$result=mysqli_fetch_array($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD: Create, Update, Delete PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="POST" action="editing.php" >
		<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="title">
			<label> edit Information </label>
		</div>		
	<div class="input-group">
			<label>first name</label>
			<input type="text" name="fname" value="<?php echo $result['fname'];?>">
		</div>
		<div class="input-group">
			<label>last name</label>
			<input type="text" name="lname" value="<?php echo $result['lname'];?>">
		</div>
        <div class="input-group">
			<label>gender</label>
			<select name="gender">
				<option value="not select">select</option>
				<option value="female"
                <?php
                if($result['gender']=='female')
                {
                    echo"selected";
                }
                ?>
                >female</option>
				<option value="male"
                <?php
                if($result['gender']=='male')
                {
                    echo"selected";
                }
                ?>
               >male</option>
			</select>
		</div>
		<div class="input-group">
			<label>mobile no.</label>
			<input type="text" name="mobileno" value="<?php echo $result['mobileno'];?>">
		</div>
		<div class="input-group">
			<label>address</label>
			<input type="text" name="place" value="<?php echo $result['place'];?>">
		</div>
		<div class="input-group">
			<button  class="btn" type="submit" name="update" >update</button>
		</div>
	</form>
</body>
</html>



