<!DOCTYPE html>
<html>
<head>
	<title>Show Data User</title>
	
</head>
<body>
	<h1>User - Show Data</h1>
	<br>

	<table border="1">
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Email</td>
			<td>Birth Date</td>
			<td>Action</td>
		</tr>
		@foreach($myusers as $item)
		<tr>
			<td>{{$item->id}}</td>
			<td>{{$item->name}}</td>
			<td>{{$item->email}}</td>
			<td>{{$item->birthdate}}</td>
			<td><form method="POST" action="{{action('MyUserController@destroy',$item->id)}}">
                    {!! csrf_field() !!}
                    {{method_field('DELETE')}}
                    <button type="submit" >Hapus</button>
                </form> 
            </td>              
		</tr>
		@endforeach
	</table>
	<br>
	<a href="{{URL::to('/create')}}">Insert</a>
</body>
</html>