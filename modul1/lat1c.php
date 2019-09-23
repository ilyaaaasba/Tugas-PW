<!DOCTYPE html>
<html>
<head>
	<title>lat1c</title>

	<style>
		.kotak {
				border : 1px solid black;
				width : 50px;
				height: 50px;
				margin : 10px;
				float : left;
				text-align : center;
				line-height: 50px;
		}
		.clear {
				clear: both;
		}
	</style>
</head>
<body>
	<?php 
		$a = "A";
		$b = "B";
		$c = "C";
	 ?>

	 <div class= "kotak"> <?php echo $a ?></div>
	 <div class="clear"></div>

	 <div class= "kotak"> <?php echo $a ?></div>
	  <div class= "kotak"> <?php echo $b ?></div>
	 <div class="clear"></div>

	  <div class= "kotak"> <?php echo $a ?></div>
	  <div class= "kotak"> <?php echo $b ?></div>
	  <div class= "kotak"> <?php echo $c ?></div>
	 <div class="clear"></div>

</body>
</html>