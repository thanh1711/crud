<?php 

foreach($user as $key => $varlue){
 
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
<table border ="1">
<tr>
<?php foreach($varlue as $thanh =>$long){?>
    <th><?php echo $thanh;?></th>
   <?php }?>
</tr>

<?php foreach($user as $key => $varlue){?>
    <tr>
 <?php foreach($varlue as $thanh =>$long){?>
    <td><?php echo $long?></td>
   <?php }?>
   </tr>
<?php } ?>

</table>
    
</body>
</html>

