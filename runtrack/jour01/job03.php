<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

<?php
$myBool = true;
$myInt = 42;
$myString = "Hello World!";
$myFloat = 3.14;

echo "<table>
		<tr>
			<th>Type</th>
			<th>Nom</th>
			<th>Valeur</th>
		</tr>
		<tr>
			<td>Boolean</td>
			<td>myBool</td>
			<td>" . var_export($myBool, true) . "</td>
		</tr>
		<tr>
			<td>Integer</td>
			<td>myInt</td>
			<td>$myInt</td>
		</tr>
		<tr>
			<td>String</td>
			<td>myString</td>
			<td>$myString</td>
		</tr>
		<tr>
			<td>Float</td>
			<td>myFloat</td>
			<td>$myFloat</td>
		</tr>
	</table>";
?>

</body>
</html>