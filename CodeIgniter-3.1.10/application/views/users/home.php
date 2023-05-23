<?php include('header.php')?>
<?php include('footer.php')?>
<div class="container">
  <?php if($this->session->flashdata('response')):?>
    <div class="row" style="margin-top:10px;">
    <div class="alert alert-success" role="alert">
      <?php echo $this->session->flashdata('response');?>
 
</div>
<?php endif;?>
        <div class="col-lg-12">
        <?php echo anchor("home/create",'create',['class'=>'btn btn-primary']);?>
</div>
</div>
<table class="table table-hover">  
<thead>
    <tr>
      
      <th>customername</th>
      <th>phone</th>
      <th>address</th>
      <th>city</th>
      <th>country</th>
      <th>operation</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count($record)):?>
    <?php foreach( $record as  $record) {?>
      <tr>
  <td ><?php echo  $record->customername;?></td>
      <td><?php echo  $record->phone;?></td>
      <td><?php echo  $record->address;?></td>
      <td><?php echo  $record->city;?></td>
      <td><?php echo  $record->country;?></td>
      <td><?php echo anchor("home/edit/{$record->id}",'update',['class'=>'btn btn-primary']);?>
      <?php echo anchor("home/delete/{$record->id}",'delete',['class'=>'btn btn-danger']);?></td>
      </tr>
    <?php }?>
    <?php else:?>
    <tr> no record found</tr>
    <?php endif;?>
</div>  
  </tbody>
</table>
