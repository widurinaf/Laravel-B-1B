<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>User Create</h1>
	<br>

	<form action="{{URL::to('/adduser')}}" method="POST" >
		{!! csrf_field() !!}
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name"/></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="Email" name="email"/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="password"/></td>
			</tr>
			<tr>
				<td>Birth Date</td>
				<td><input type="Date" name="birthdate"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="Add Value"/></td>
			</tr>
		</table>
	</form>
</body>
</html>