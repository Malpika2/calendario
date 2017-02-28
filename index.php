<!DOCTYPE html>
<!---?????????===================http://aprende-web.net/jspracticas/tiempo/tiempo7.php ==========-->
<html lang="en">

<head>
<?php
	include("generar-calendario.php");
?>
</head>
<body>

	<header>
	</header>
	
	
	<section>
		<div class="col-md-8">
		<div><button type="button" class="btn btn-success" href="generar_calendario(03,2017,es)"><<</button><button type="button" class="btn btn-success"><<</button></div>
			<?php
			echo generar_calendario(02,2017,"es");
			?>
		</div>
	</section>
	

 <style>
.calendar-day, .calendar-day-head{
    border: 2px solid blue;
    padding: 35px;
}
.calendar-day-head{
    background: #ddd;
}
.calendar-day-np{
	 background: red;
	
}
.calendar-row{
	background:rgba(5,9,156,0.4);
	
}
</style> 
</body>

</html>
