<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan2c</title>
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

		.ganjil {
			background-color: #003;
			color:#fff;
		}

		.genap {
			background-color: #999;
		}

	</style>
</head>
<body>
	<?php for ($x=1; $x <= 5 ; $x++) : ?>
		<?php for ($y=1; $y <=$x ; $y++) : ?>
			<?php if ($x % 2 == 0) : ?>
				<div class="kotak genap">
					<?php echo "$y"; ?>
					</div>
			<?php else: ?>
				<div class="kotak ganjil">
					<?php echo "$y"; ?>
					</div>
			<?php endif; ?>
		<?php endfor; ?>
		<div class="clear"></div>
	<?php endfor; ?>


</body>
</html>