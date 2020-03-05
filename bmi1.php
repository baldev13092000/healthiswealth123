<?php
 include('heightweight.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculating BMI</title>
		<h1 style="font-family:Arial; font-size:50px; color:White;text-align:center">
			Body Mass Index
		</h1>
</head>
<body background="food-1932466_1280.jpg">
	

	<form>
	<table>
		<tr>
		<td style="font-size:30px ;color:White">
			Your weight is <?php echo $_POST["w"]; ?><br>
			Your height is <?php echo $_POST["h"]; ?><br>
			Calculated BMI is <?php echo $_POST["bmi1"]; ?><br>
			</td>
			
		</tr>
	</table>
</form>

</body>
</html>
