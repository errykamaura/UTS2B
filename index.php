<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
    require_once('./assets/requires/config.php');
    require_once('./assets/requires/header1.php');
?>
<div class="container">
	<div id="jdlaccr" style="font-size:36px;color:brown;">Harber Web</div>
	<div class="card shadow-sm mb-5 bg-black rounded">
		<div class="card-body" >
			<h5 class="card-title">Input Name:</5>
			<p class="card-text"><input type="text" class="input 
			input-Ig" style="width:100%;" id="srcInv"></p>
    </div>
    <div class="card-footer">
		 <button class="btn btn-primary" id="btnsearch">Submit</button>
        </div>
    </div>
    <div id="infoinvaccr"></div>
</div>
</html>
<script src="./assets/scripts/js/harberweb.js"></script>