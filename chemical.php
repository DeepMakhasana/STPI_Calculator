<?php
	include("include/header.php");
	head("GTU Chemical STPI Calculator");
?>

<main>
<!-- Chemical Final STPI -->
	<h2>Chemical Final Year STPI</h2>
	<form action="calculate/calculate_ch.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>
				<?php subject("im","Industrial Management <br>(3350501)"); ?>
				<?php subject("mt2","Mass Transfer - II <br>(3350502)"); ?>
				<?php subject("prpt","Petroleum Refining & Petrochemical Technology <br>(3350503)"); ?>
				<?php subject("uicp","Utilities And Instrumentation In Chemical Plant <br>(3350504)"); ?>
				<?php subject("cet","Chemical Engineering Thermodynamics <br>(3350505)"); ?>
				<?php subject("ft","Fertilizer Technology <br>(3360501)"); ?>
				<?php subject("cepe","Chemical Engineering Plant Economics <br>(3360502)"); ?>
				<?php subject("cre","Chemical Reaction Engineering <br>(3360503)"); ?>
				<?php subject("ppt","PPT SFD PT (Any One) <br>(3360504-5-6-7)"); ?>

				<tr>
					<td><input type="submit" value="calculate" name="totalstpi"></td>
				</tr>
			</tbody>
		</table>
	</form>

<!-- Chemical 5th sem -->
	<h2>Chemical 5<sup>th</sup> Semester STPI</h2>
	<form action="calculate/calculate_ch_5.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>
				<?php subject("im","Industrial Management <br>(3350501)"); ?>
				<?php subject("mt2","Mass Transfer - II <br>(3350502)"); ?>
				<?php subject("prpt","Petroleum Refining & Petrochemical Technology <br>(3350503)"); ?>
				<?php subject("uicp","Utilities And Instrumentation In Chemical Plant <br>(3350504)"); ?>
				<?php subject("cet","Chemical Engineering Thermodynamics <br>(3350505)"); ?>
				
				<tr>
					<td><input type="submit" value="Calculate" name="calculate" class="btn"></td>
				</tr>
			</tbody>
		</table>
	</form>


<!-- Chemical 6th sem -->
<h2>Chemical 6<sup>th</sup> Semester STPI</h2>
	<form action="calculate/calculate_ch_6.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>
				<?php subject("ft","Fertilizer Technology <br>(3360501)"); ?>
				<?php subject("cepe","Chemical Engineering Plant Economics <br>(3360502)"); ?>
				<?php subject("cre","Chemical Reaction Engineering <br>(3360503)"); ?>
				<?php subject("ppt","PPT SFD PT (Any One) <br>(3360504-5-6-7)"); ?>

				
				<tr>
					<td><input type="submit" value="calculate" name="submit" id="btn"></td>
				</tr>
			</tbody>
		</table>
	</form>
</main>

<?php
	include 'include/footer.php';
?>
</body>
</html>