<?php 


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
<th>id</th>
<th>name</th>
<th>email</th>
</tr>
@foreach($user as $long)
<tr>
<td>{{$long->id}}</td>
<td>{{$long->name}}</td>
<td>{{$long->email}}</td>
<td><a href="abc/xoa/{{$long->id}}">xoa</a></td>
</tr>
@endforeach

</table>
    
</body>
</html>

