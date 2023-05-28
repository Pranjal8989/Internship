
<?php $this->load->view('header');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
</head>
<body>
    <table border="3" class="table table-dark table-striped-columns">
        <tr>
             <td>S.No</td>
             <td>First Name</td>
             <td>Last Name</td>
             <td>Gender</td>
             <td>Date Of Brith</td>
             <td>Phone</td>
             <td>Occupation</td>
             <td>Qualification</td>
             <td>Local Address</td>
             <td>Permanant Address</td>
             <td>Pincode</td>
             <td>Operation</td>
        </tr>
        <?php
        
        foreach($rs as $data)
        {?>
             <tr>
            <td> <?php echo $data->id; ?></td>
            <td> <?php echo $data->fname; ?></td>
            <td> <?php echo $data->lname; ?></td>
            <td> <?php echo $data->gender; ?></td>
            <td> <?php echo $data->dob; ?></td>
            <td> <?php echo $data->phone; ?></td>
            <td> <?php echo $data->occupation; ?></td>
            <td> <?php echo $data->qualification; ?></td>
            <td> <?php echo $data->laddress; ?></td>
            <td> <?php echo $data->paddress; ?></td>
            <td> <?php echo $data->pincode; ?></td>

           <td>
           <a  class="btn btn-primary" href="<?php echo base_url('Welcome/edit/'.$data->id);?>">Update </a>
           <a class="btn btn-danger" href="<?php echo base_url('Welcome/deletedata/'.$data->id);?>">Delete </a> </td>
        </tr>
              
<?php
        }
            
         ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
<?php $this->load->view('footer');?>