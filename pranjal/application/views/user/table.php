<?php include('header.php')?>
<?php include('footer.php')?>
<div class="container">
        <div class="col-lg-12">
        <?php echo anchor("Form/create",'create',['class'=>'btn btn-primary']);?>
</div>
</div>
<table class="table table-hover">  
<thead>
    <tr>
      
      <th>firstname</th>
      <th>phone</th>
      <th>address</th>
      <th>operation</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach( $t as  $row) {?>
      <tr>
      <td ><?php echo $row->fname;?></td>
      <td><?php echo $row->phone;?></td>
      <td><?php echo $row->address;?></td>
      <td><?php echo anchor("home/edit/{$record->id}",'update',['class'=>'btn btn-primary']);?>
      <?php echo anchor("home/delete/{$record->id}",'delete',['class'=>'btn btn-danger']);?></td>
      </tr>
    <?php }?>
</div>  
  </tbody>
</table>
