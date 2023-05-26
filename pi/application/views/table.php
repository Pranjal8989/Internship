<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete record</title>
</head>
<body>
    <table border="3">
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
           <a href="<?php echo base_url('Welcome/edit/'.$data->id);?>">Update </a>
           <a href="<?php echo base_url('Welcome/deletedata/'.$data->id);?>">Delete </a> </td>
        </tr>
              
<?php
        }
            
         ?>
</table>
</body>
</html>