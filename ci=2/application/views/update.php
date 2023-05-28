<?php
// print_r($data);die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<style>
	body {
	background-color:powderblue;
    font-size: 20px;
}
form {
	height: 100px auto;
    width: 40%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 2px solid #bbbbbb; 
    border-radius: 5px;
	background-color:lightyellow;
	box-shadow: 0px 0px 10px rgba(0,0,0, 0.2);
}
.input-group {
    margin: 30px 30px 30px 30px;
}
.input-group input {
    height: 40px;
    width: 93%;
    padding: 5px 10px;
    font-size: 23px;
    border-radius: 10px;
    border: 2px solid gray;
}
.input-group2 input {
    height: 30px;
    width: 53%;
    padding: 5px 15px;
    font-size: 20px;
    border-radius: 10px;
    border: 2px solid gray;
}
</style>
<body>
    
    <form action="<?php echo base_url().'Welcome/updatedata/'.$data->id; ?>" method="POST">
	<h1  align="center">Registration Form </h1>
    
     
	<div class="container">
	<table>
	 <div class="input-group">
			<label>First name</label>
			<input type="text" name="fname" value=" <?php echo $data->fname; ?>" required>
	
		</div>
		<div class="input-group">
			<label>Last name</label>
			<input type="text" name="lname" value="<?php echo $data->lname; ?>" required>
	
		</div>
        <div class="input-group">
			<label>Gender</label>
			 <select name="gender">
			<?php if($data->gender=="  select"){ ?>
				<option value="not select" selected> not select</option>
				<option value="male" >male</option>
				<option value="female" >female</option>
				<?php } else if($data->gender=="male"){ ?>
				<?php ?>
				<option value="not select" >not select</option>
				<option value="male" selected>male</option>
				<option value="female" >female</option>
				<?php } 
				else if($data->gender=="female"){ ?>
					<option value="not select" >not select</option>
				<option value="male" >male</option>
				<option value="female" selected>female</option>
					<?php }else{ ?>

		<option value="other"></option>
		<?php } ?> 
</select>
		</div>
		<div class="input-group">
			<label>Date of Brith</label>
			<input type="Date" name="dob" value="<?php echo $data->dob; ?>" required>
		
        </div>	
		<div class="input-group">
			<label>Phone</label>
			<input type="text" name="phone" value="<?php echo $data->phone; ?>" required>
	
		</div>
		<div class="input-group">
			<label>Occupation</label>
			<select name="occupation">
			<?php if($data->occupation==""){ ?>
				<option value="not select" selected> not select</option>
				<option value="student">student</option>
				<option value="pjob">Private Job</option>
				<option value="gjob">Govt. Job</option>
				<option value="farmer">Farmer</option>
				<?php } else if($data->occupation=="student"){ ?>
				<?php ?>
				<option value="not select">not select</option>
				<option value="student"selected>student</option>
				<option value="pjob">Private Job</option>
				<option value="gjob">Govt. Job</option>
				<option value="farmer">Farmer</option>
				<?php } 
				else if($data->occupation=="pjob"){ ?>
					<option value="not select">not select</option>
				<option value="student">student</option>
				<option value="pjob" selected>Private Job</option>
				<option value="gjob">Govt. Job</option>
				<option value="farmer">Farmer</option>
						<?php } 
				else if($data->occupation=="gjob"){ ?>
					<option value="not select">not select</option>
				<option value="student">student</option>
				<option value="pjob">Private Job</option>
				<option value="gjob" selected>Govt. Job</option>
				<option value="farmer">Farmer</option>
						<?php } 
				else if($data->occupation=="farmer"){ ?>
					<option value="not select">not select</option>
				<option value="student">student</option>
				<option value="pjob">Private Job</option>
				<option value="gjob" >Govt. Job</option>
				<option value="farmer" selected>Farmer</option>
					<?php }else{ ?>
						

		<option value="other"></option>
		<?php } ?> 
</select>
			
	
		</div>
		<div class="input-group">
			<label>Qualification</label>
			<select name="qualification">
				<?php if($data->qualification==""){ ?>
					<option value="not select" selected>select</option>
				<option value="10th">10th</option>
				<option value="12th">12th</option>
				<option value="Under Graduate">Under Graduate</option>
				<option value="Post Graduate">Post Graduate</option>
				<?php } else if($data->qualification=="10th"){ ?>
				<?php ?>
				<option value="not select">select</option>
				<option value="10th" selected>10th</option>
				<option value="12th">12th</option>
				<option value="Under Graduate">Under Graduate</option>
				<option value="Post Graduate">Post Graduate</option>
				<?php } 
				else if($data->qualification=="12th"){ ?>
						<option value="not select">select</option>
				<option value="10th">10th</option>
				<option value="12th" selected>12th</option>
				<option value="Under Graduate">Under Graduate</option>
				<option value="Post Graduate">Post Graduate</option>
						<?php } 
				else if($data->qualification=="Under Graduate"){ ?>
						<option value="not select">select</option>
				<option value="10th">10th</option>
				<option value="12th">12th</option>
				<option value="Under Gradu" selected>Under Gradu</option>
				<option value="Post Gradu">Post Gradu</option>
						<?php } 
				else if($data->qualification=="Post Gradu"){ ?>
						<option value="not select">select</option>
				<option value="10th">10th</option>
				<option value="12th">12th</option>
				<option value="Under Gradu">Under Gradu</option>
				<option value="Post Gradu" selected>Post Gradu</option>
					<?php }else{ ?>
						

		<option value="other"></option>
		<?php } ?> 
			
			
			</select>
	
		</div>
		<div class="input-group">
			<label>Local Address</label>
			<input type="text" name="laddress" value="<?php echo $data->laddress; ?>" required>
			
		</div>
		<div class="input-group">
			<label>Permanent Address</label>
			<input type="text" name="paddress" value="<?php echo $data->paddress; ?>" required>
			
		</div>
		<div class="input-group">
			<label>Pincode</label>
			<input type="number" name="pincode" value="<?php echo $data->pincode; ?>" required>
			
		</div>
		<!-- <div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $data->email; ?>" required>
			
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password" value="<?php echo $data->password; ?>" required>
			
		</div> -->
		<div class="input-group">
			<button class="btn btn-primary" type="submit" name="submit" >Submit</button>
		</div>
     </div>
 </form>
</table>
    
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>    
</body>
</html>