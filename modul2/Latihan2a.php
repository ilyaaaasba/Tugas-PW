<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan 2a</title>
</head>
<body>
		<table border="1" cellpadding="3" cellpadding="0">
			<tr>
				<th>Kolom 1</th>
				<th>Kolom 2</th>
				<th>Kolom 3</th>
				<th>Kolom 4</th>
				<th>Kolom 5</th>
			</tr>

			<?php 

				for ($x= 1; $x <= 15 ; $x++) {
					echo "<tr>";
				for ($y=1; $y <= 5 ; $y++) {
					echo "<th>Kolom $x Baris $y</th>";
				}
					echo("</tr>");
				}

			 ?>
			</table>

</body>
</html>