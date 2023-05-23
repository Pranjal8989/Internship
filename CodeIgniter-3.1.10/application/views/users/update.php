<?php include('header.php')?>
<?php include('footer.php')?>
<div class='container'>
    
<?php echo form_open("home/update/{$record->id}")?>
  <fieldset>
    <legend>update customer</legend
    
    <div class='row'>
      <div class="col-lg-6">
    <div class="form-control">
      <label for="customer name">Customer Name</label>
     <?php echo form_input(['class'=>'form-control','name'=>'customername','placeholder'=>'customer name','value'=>set_value('customername',$record->customername)]);?>
</div>
</div>
</div>

<div class="col-lg-6">
<?php echo form_error('customername')?>
</div>

<div class='row'>
      <div class="col-lg-6">
    <div class="form-control">
      <label for="phone">Phone</label>
     <?php echo form_input(['class'=>'form-control','name'=>'phone','placeholder'=>'phone','value'=>set_value('phone',$record->phone)]);?>
</div>
</div>
</div>
   
<div class="col-lg-6">
<?php echo form_error('phone')?>
</div>


<div class='row'>
      <div class="col-lg-6">
    <div class="form-control">
      <label for="address">Address</label>
     <?php echo form_input(['class'=>'form-control','name'=>'address','placeholder'=>'address','value'=>set_value('address',$record->address)]);?>
</div>
</div>
</div>
<div class="col-lg-6">
<?php echo form_error('address')?>
</div>
   

<div class='row'>
      <div class="col-lg-6">
    <div class="form-control">
      <label for="city">City</label>
     <?php echo form_input(['class'=>'form-control','name'=>'city','placeholder'=>'city','value'=>set_value('city',$record->city)]);?>
</div>
</div>
</div>

<div class="col-lg-6">
<?php echo form_error('city')?>
</div>   

<div class='row'>
      <div class="col-lg-6">
    <div class="form-control">
      <label for="country">Country</label>
     <?php echo form_input(['class'=>'form-control','name'=>'country','placeholder'=>'country','value'=>set_value('country',$record->country)]);?>
</div>
</div>
</div>
   
<div class="col-lg-6">
<?php echo form_error('country')?>
</div>

      <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']);?>
<?php echo form_reset(['type'=>'reset','class'=>'btn btn-secondary','value'=>'Reset']);?>
  </fieldset>
  <?php echo form_close()?>
</div>
