<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/main.css">

    <title>Basic Calculator</title>
</head>

<body>
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
<h2>Basic Javascript Calculator</h2>
        </div>
    </div>

    <div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<!-- basic calculator -->
				<div id="bc">
					<form name="calc">
						<input type="text" name="output" placeholder="0" value="" ><br>

						<input class="zoom green" type="button" name="" value=" 1 " onclick="entries('1')" >
						<input class="zoom green" type="button" name="" value=" 2 " onclick="entries('2')" >
						<input class="zoom green" type="button" name="" value=" 3 " onclick="entries('3')" >
						<input class="zoom green" type="button" name="" value=" / " onclick="entries('/')" ><br>

						<input class="zoom green" type="button" name="" value=" 4 " onclick="entries('4')" >
						<input class="zoom green" type="button" name="" value=" 5 " onclick="entries('5')" >
						<input class="zoom green" type="button" name="" value=" 6 " onclick="entries('6')" >
						<input class="zoom green" type="button" name="" value=" X " onclick="entries('*')" ><br>

						<input class="zoom green" type="button" name="" value=" 7 " onclick="entries('7')" >
						<input class="zoom green" type="button" name="" value=" 8 " onclick="entries('8')" >
						<input class="zoom green" type="button" name="" value=" 9 " onclick="entries('9')" >
						<input class="zoom green" type="button" name="" value=" - " onclick="entries('-')" ><br>

						<input class="zoom green" type="button" name="" value=" ( " onclick="entries('(')" >
						<input class="zoom green" type="button" name="" value=" ) " onclick="entries(')')" >
						<input class="zoom green" type="button" name="" value=" 0 " onclick="entries('0')" >
						<input class="zoom green" type="button" name="" value=" + " onclick="entries('+')" ><br>

						<input class="zoom green" type="button" name="" value=" c " onclick="erase()" >
						<input class="zoom green" type="button" name="" value=" . " onclick="entries('.')" >
						<input class="zoom green" type="button" name="" value=" = " onclick="calculate()" >
						<input class="zoom green" type="button" name="" value=" % " onclick="entries('%')" ><br>
						
						
						
						
					</form>

				</div>
                    
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
    </div><!-- /ww -->
    
    	<div id="footer">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6">
					<h4>My Links</h4>
					<p>
						<a href="https://medium.com/@n.diamond.705">Medium</a><br/>
						<a href="https://twitter.com/uchendububa">Twiter</a><br/>
						<a href="https://github.com/Diamond705">Github</a>
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-6">
					<h4>Description</h4>
					<p>Simple calculator made functional by Javascript logic.</p>
				</div><!-- /col-lg-4 -->
			
			</div>
		
		</div>
	</div>

	<script type="text/javascript" src="assets/js/main.js"></script>	
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/hover.zoom.conf.js"></script>
	<script type="text/javascript" src="assets/js/hover.zoom.js"></script>
</body>

</html>