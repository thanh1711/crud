

@foreach($users as $user)
<div style="display:flex">
<small>ten :{{$user->name}}</small>
<br>
<small>Email:{{$user->Email}}</small>
<small>password:{{$user->password}}</small>
</div>
<form action="thanh/{{$user->id}}" method ='POST'>
@method('DELETE')
@csrf

<button type='submit'>xoa</button>
</form>
@endforeach
