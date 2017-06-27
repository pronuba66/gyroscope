<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" id="description" content="" />
	<meta name="keywords" id="keywords" content="" />
	<meta name="language" id="language" content="en-us" />
	<title>Gyroscope working</title>
	<link rel="author" href="Joseph Stephen">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="three.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<style type="text/css">
		html, body {margin: 0; padding: 0; background: #111; font-family: 'Open Sans', sans-serif; font-size: 14px; }
		 #canvas, canvas {display: block; margin: 0 auto; }
		.form {position: fixed; left: 0; top: 0; bottom: 0; max-width: 100%; height: 100%; overflow: visible; }
		.form-control {margin-bottom: 0.5em; }
		.form .box {background-color: white; padding: 1em 1em 0.5em 1em; overflow: auto; max-width: 100%; max-height: 100%; box-sizing: border-box; }
		.form.hidden .box {display: none; }
		.form .button {position: absolute; left: 100%; top: 1em; background-color: white; padding: 10px 6px; cursor: pointer; }
		.form.hidden .button {position: fixed; left: 0; top: 1em; background-color: white; padding: 10px 6px; }
		.form .button .arrow {width: 0; height: 0; border-top: 10px solid transparent; border-bottom: 10px solid transparent; border-left: none; border-right:10px solid black; }
		.form.hidden .button .arrow {width: 0; height: 0; border-top: 10px solid transparent; border-bottom: 10px solid transparent; border-left:10px solid black; border-right: none; }
	</style>
</head>
<body>
	<div id="canvas"></div>
	<div id="form" class="form hidden">
		<div class="button" id="button"><div class="arrow"></div></div>
		<div class="box">
			<div class="form-control">Linear Acceleration/Force</div>
			<div class="form-control"><input type="checkbox" name="fgravity" id="fgravity" /><label for="fgravity"> Gravity</label></div>
			<div class="form-control"><input type="checkbox" name="frotational" id="frotational" /><label for="frotational"> Rotational</label></div>
			<div class="form-control"><input type="checkbox" name="ftorque" id="ftorque" checked="true" /><label for="ftorque"> Torque due to gravity</label></div>
			<div class="form-control"><input type="checkbox" name="ftorquevertical" id="ftorquevertical" /><label for="ftorquevertical"> Torque due to gravity (Vertical)</label></div>
			<div class="form-control"><input type="checkbox" name="ftorquereference" id="ftorquereference" checked="true" /><label for="ftorquereference"> Torque reference helpers</label></div>
			<hr>
			<div class="form-control">Linear Velocty/Momentum </div>
			<div class="form-control"><input type="checkbox" name="mrotational" id="mrotational" checked="true" /><label for="mrotational"> Rotational</label></div>
			<div class="form-control"><input type="checkbox" name="mprecession" id="mprecession" checked="true" /><label for="mprecession"> Precession</label></div>
			<hr>
			<div class="form-control">Simulation speed </div>
			<div class="form-control"><input type="radio" name="sspeed" id="sspeed1" value="1" checked="true" /><label for="sspeed1"> x</label></div>
			<div class="form-control"><input type="radio" name="sspeed" id="sspeed2" value="2" /><label for="sspeed2"> x/2</label></div>
			<div class="form-control"><input type="radio" name="sspeed" id="sspeed3" value="4" /><label for="sspeed3"> x/4</label></div>
			<div class="form-control"><input type="radio" name="sspeed" id="sspeed4" value="8" /><label for="sspeed4"> x/8</label></div>
			<hr>
			<div class="form-control">Nutation </div>
			<div class="form-control"><input type="radio" name="snutation" id="snutation0" value="0" /><label for="snutation0"> 0&deg;</label></div>
			<div class="form-control"><input type="radio" name="snutation" id="snutation10" value="10" /><label for="snutation10"> 10&deg;</label></div>
			<div class="form-control"><input type="radio" name="snutation" id="snutation20" value="20" checked="true" /><label for="snutation20"> 20&deg;</label></div>
			<div class="form-control"><input type="radio" name="snutation" id="snutation30" value="30" /><label for="snutation30"> 30&deg;</label></div>
			<div class="form-control"><input type="radio" name="snutation" id="snutation40" value="40" /><label for="snutation40"> 40&deg;</label></div>
			<div class="form-control"><input type="radio" name="snutation" id="snutation50" value="50" /><label for="snutation50"> 50&deg;</label></div>
		</div>
	</div>
	<script type="text/javascript" src="build/gyro.min.js"></script>
</body>
</html>