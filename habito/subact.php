<!DOCTYPE html>
<html>
<head>
	<title>Submit Activity</title>
</head>
<body>
 
	<h2>Submit Activity</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>please signup if no account</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>User ID</td>
				<td><input type="text" name="userid" required></td>
			</tr>
			<tr>
				<td>Date</td>
				<td><?php $mydate=getdate(date("U")); echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";?></td>
			</tr>
            <tr>
				<td>Time</td>
				<td><?php $mydate=getdate(date("U")); echo "$mydate[hours] hours, $mydate[minutes] minutes, $mydate[seconds] seconds";?></td>
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