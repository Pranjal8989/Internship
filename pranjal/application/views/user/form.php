<?php include "header.php"?>
<?php include "footer.php"?>

<html>
<body>
<form method="POST" action="Form/insertdata" >
<fieldset>
	<div class= "container">
    <h1 align="center"> Registeration Form</h1>
    <div class="input-group">
	<div class='row'>
      <div class="col-lg-6">
			<label>First name</label>
			<input type="text" name="fname" value="" >
		</div>
		<div class="input-group">
		<div class='row'>
      <div class="col-lg-6">
			<label>phone</label>
			<input type="text" name="phone" value="" >
		</div>
		<div class="input-group">
		<div class='row'>
      <div class="col-lg-6">
			<label>Address</label>
			<input type="text" name="address" value="" >
		</div>
        <div class="input-group">
        <div class="col px-md-5"><button class="btn btn-primary" type="submit" name="submit" >submit</button></div>
        <div class="col px-md-5"><button class="btn btn-secondary" type="reset" name="reset" >reset</button></div>

        </div>
</fieldset>
	</form>
</body>
</html>