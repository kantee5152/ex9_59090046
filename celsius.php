<html>
<body>
<?php
	$fah = $_POST["name"];
	$cel = (5/9) * ($fah - 32);
?>	
<?php echo $fah ?> Fahrenheit = <?php echo $cel ?> Celsius
</body>
</html>