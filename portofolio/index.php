<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "../head.php" ?>
	<?php include "set.php" ?>
</head>
<body>
	<?php include "../navbar.php" ?>
	<h2 style="text-align: center;">List Portofolio</h2>
	<div class="container">
		<form action="" method="post" name="set_jumlah_porto" id="set_jumlah_porto">
			<div class="input-group mb-3">
				<select id="jumlah_porto" class="custom-select col-5" name="jumlah_porto">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5" selected="selected">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
				<input type="submit" value="Sort" />
			</form>
		</div>
	</form>
	<div id="02">
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#jumlah_porto").change(function(){
			var selectedcolor = $('#jumlah_porto').val();
			alert(selectedcolor);
			$("#02").html('<div class="porto-title"><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</b></div><div class="porto-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><a class="button" href="#detail">Detail</a></div>');			
		});		
	});	
</script>
</html>