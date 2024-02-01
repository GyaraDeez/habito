<!DOCTYPE html>
<html>
<head>
	<title>Habito Login form</title>
</head>
<body>
 
	<h2>Habito Login form</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>please signup if no account</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Name</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="send"></td>
			</tr>		
		</table>
	</form>
</body>
</html>