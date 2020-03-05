<?php
if (isset($_POST['bm'])){
	 $h1=(integer)$h;
     $w1=(float)$w;
     $var1=$h1*$h1;
     $bmi=(float)($w/$var1)$bmi1;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<h1 style="font-family:Arial; font-size:50px; color:White">
		
		Take care of your body.It's the only place you have to live.
	</h1>
	<style>  
	table{
	text-align:center
    }
    </style>
</head>
<body background="food-1932466_1280.jpg">

	<form action="bmi1.php" method="POST">
	<table>
		<tr>
		<td style="font-size:30px; text-align: center">
			Weight :
	
			
			
		</td>
		<td>
	         <input type="text" placeholder="Kg" name="w">
	     
		</td>
	</tr>
	<tr>
		<td style="font-size:30px;text-align: center">
                 Height:
		
		</td>
		<td>
			<input type="text" placeholder="m" name="h">
			
		</td>
		<tr>
			<td>


			<input type="Submit" name="bm" value="submit1">


		
		</td>
	</tr>
  

</table>


</form>

</body>
</html>
