<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uers details</title>
</head>
<body>
    <h1>User data </h1>
    <table>
<tr>
    <td>First name </td>
    <td>last name </td>
    <td>age</td>
</tr>
    <?php foreach($users as $user): ?>
    <tr>
    <td><?php echo $user->firstname ?></td>
    <td><?php echo $user->lastname ?></td>
    <td><?php echo $user->age ?></td>
</tr>
<?php endforeach ;?>
  </table>
</body>
</html>