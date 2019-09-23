<!DOCTYPE html>
<html>
<head>
	<title>Modul - Latihan 2b</title>
	<style>
		.kotak {

			display: inline-block;
			width:30px;
			height:30px;
			border:2px solid black;
			padding:10px;
			margin:5px;
			text-align: center;
			font-family: sans-serif;
		}

		.clear {
			clear: both;
		}

	</style>
</head>
<body>
	<?php for ($x=1; $x <= 5 ; $x++) : ?>
		<?php for ($y=1; $y <=$x ; $y++) : ?>
		<div class="kotak">
			<?php echo "$y" ; ?>
			</div>
		<?php endfor; ?>
			<div class="clear"></div>
	<?php endfor; ?>



</body>
</html>