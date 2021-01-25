<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
<style>
.navigation a{
		font-family: Arial, Helvetica, sans-serif;
		display:block;
		width:70px ;
		color: #F5B40F;
		text-decoration: none;
		
	}
	.con{
			margin-left: 30px;
			margin-top: -20px;
		}
	.label{
			display: inline-block;
			float: left;
			clear: left;
			width: 150px;
			text-align: left;
			padding-bottom: 6px;
			
		}
</style>	
	
</head>

<body>
<div class="header">
<img src="header.jpg" width="1000" height="146" alt=""/></div>
	
	
<table>
	<tr>
	 <td>
      <img src="radika.JPG" width="206" height="146" alt=""/>
		
	   <nav class="navigation">
			 <a href="Home.html">Home</a> 
				<a href="Menu.html">Menu</a> 
				<a href="Calculator.html">Calculator</a>
				<a href="Reservation.php">Reserve</a> 
		</nav>	 
		
		
		
		
	  </td>
	<td>	
		<div class="con">
  						
		<form action="phpscript.php" method="post">
			<div>
				<label for="name" class="label">Name and Surname</label>
				<input id="name" name="name" type="text" class="input">
			</div>
								
			<div>
				<label for="phone" class="label">Phone*</label>
				<input id="phone" name="phone" type="tel" class="input" required>
			</div>
								
			<div>
				<label for="email" class="label">E-mail*</label>
				<input id="email" name="email" class="input1" type="email" required>
			</div>
								
			<div id="timedate" >
				<label for="date" class="label">Date and Time*</label>
				<input id="date" name="date" class="input" type="date" required >
									
									
				
				<input type="time" id="time" name="time" style="width:65px" >
			</div>
			<div>
				<input type="submit" id="btn" name="btn" value="Reserve">
									
			</div>
			<div>
				<input type="submit" id="btn" name="btn" value="Reserve">
									
			</div>
			
		</form>
		
		</div>	
		
		
	  </td>
	
		
		
  </tr>
	
	
		
</table>
<?php include "phpscript.php"
?>	
</body>
</html>
