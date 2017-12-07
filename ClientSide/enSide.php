<!DOCTYPE html>
<html>
<head>	
	<title>En Anden Side</title>
    <?php include 'header.php' ?>
	<script src="https://www.w3schools.com/lib/w3.js"></script>
	<div w3-include-html="header.html"></div>
	<meta charset="utf-8">
</head>
<body>
	<h1>Dette er en anden side som ikke er den samme som den første</h1>
	<hr>
	<p>Her ville jeg så skrive en rigtig lang tekst, desværre kan jeg ikke rigtig finde på hvad jeg skal skrive eller hvad denne side skal indeholde, så nu er der lidt tekst om at jeg ikke ved det...</p>
	<!-- <iframe src="file:///C:/Users/AnZa.skp/Desktop/ClientSide/index.html" width="800" height="500"></iframe> -->
	<canvas id="canvas" width="200" height="200" style="background-color: #333">
		
	</canvas>
</body>
	<script>
		w3.includeHTML();
	</script>

	<script type="text/javascript">
		var canvas = document.getElementById("canvas");
		var ctx = canvas.getContext("2d");
		var radius = canvas.height / 2;
		ctx.translate(radius, radius);
		radius = radius * 0.90;
		drawClock();

		function drawClock() 
		{
    		ctx.arc(0, 0, radius, 0 , 2*Math.PI);
    		ctx.fillStyle = "white";
    		ctx.fill();
    		drawFace(ctx, radius)
		}

		function drawFace(ctx, radius)
		{
		    var grad;

 		   ctx.beginPath();
    	ctx.arc(0, 0, radius, 0, 2*Math.PI);
    	ctx.fillStyle = 'white';
    	ctx.fill();

    	grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
    	grad.addColorStop(0, '#333');
    	grad.addColorStop(0.5, 'white');
    	grad.addColorStop(1, '#333');
    	ctx.strokeStyle = grad;
    	ctx.lineWidth = radius*0.1;
    	ctx.stroke();

    	ctx.beginPath();
    	ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
    	ctx.fillStyle = '#333';
    	ctx.fill();
		}
	</script>
</html>
    <!-- var grad;

    ctx.beginPath();
    ctx.arc(0, 0, radius, 0, 2*Math.PI);
    ctx.fillStyle = 'white';
    ctx.fill();

    grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
    grad.addColorStop(0, '#333');
    grad.addColorStop(0.5, 'white');
    grad.addColorStop(1, '#333');
    ctx.strokeStyle = grad;
    ctx.lineWidth = radius*0.1;
    ctx.stroke();

    ctx.beginPath();
    ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
    ctx.fillStyle = '#333';
    ctx.fill(); -->