<!DOCTYPE html> 
<html>
<head>
	<title>Instituto</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	
	<script src="http://code.jquery.com/jquery-1.4.5.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<style type="text/css">
		.custom-corners .ui-bar{
			-webkit-border-top-left-radius: inherit;
			border-top-left-radius: inherit;
			-webkit-border-top-right-radius: inherit;
			border-top-right-radius: inherit;
		}
		
		.custom-corners .ui-body{
			border-top-width: 0;
			-webkit-border-bottom-left-radius: inherit;
			border-bottom-left-radius: inherit;
			-webkit-border-bottom-right-radius: inherit;
			border-bottom-right-radius: inherit;
		}
		
		.texto{
			width: 80%;
		}
		
		body{
			max-width:720px;
		}
		
		.center{
			margin: auto;
		}
	</style>
	
</head>

<body class="center">
	<div data-role="header" data-position="fixed" data-fullscreen="true" align="center">
		<h1>Page Title</h1>
		<a href="#" class="ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-btn-icon-gear">Más</a>
	</div>
	
	<div class="ui-corner-all custom-corners texto">
		<div class="ui-bar ui-bar-a" align="center">
			<h3>Informacion de Instituto</h3>
		</div>
		<div class="ui-body ui-body-a" align="center">
			<p>Aqui va la informacion de software o de la institucion</p>
		</div>			
	</div>
	
	<div data-role="footer" align="center">
		<h4>Page Footer</h4>
	</div>
	
</body>
</html>