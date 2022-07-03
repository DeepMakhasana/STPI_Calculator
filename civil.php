<?php
	include("include/header.php");
	head("GTU Civil STPI Calculator");
?>

<main>
<!-- Civil Final STPI -->
	<h2>Civil Final Year STPI</h2>
	<form action="calculate/calculate_civil.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>
				<?php subject("dss","Design of Steel Structure <br>(3350601)"); ?>
				<?php subject("ct","Concrete Technology <br>(3350602)"); ?>
				<?php subject("wsse","Water Supply & Sanitary Engineering <br>(3350603)"); ?>
				<?php subject("ecv","Estimating , Costing & Valuation <br>(3350604)"); ?>
				<?php subject("he","Highway Engineering (Any other)<br>(3350606)"); ?>
				<?php subject("drcs","Design Of Reinforced Concrete Structures <br>(3360601)"); ?>
				<?php subject("cqcm","Construction Quality Control & Monitoring <br>(3360602)"); ?>
				<?php subject("cpm","Construction Project Managemnet <br>(3360603)"); ?>
				<?php subject("rhte","Railway , Harbour & Tunnel Engineering (Any other) <br>(3360606)"); ?>
				<?php subject("te","Traffic Engineering (Any other) <br>(3360607)"); ?>

				<tr>
					<td><input type="submit" value="calculate" name="totalstpi"></td>
				</tr>
			</tbody>
		</table>
	</form>

<!-- Civil 5th sem -->
	<h2>Civil 5<sup>th</sup> Semester STPI</h2>
	<form action="calculate/calculate_civil_5.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>
				<?php 
					subject("dss","Design of Steel Structure <br>(3350601)");
					subject("ct","Concrete Technology <br>(3350602)");
					subject("wsse","Water Supply & Sanitary Engineering <br>(3350603)");
					subject("ecv","Estimating , Costing & Valuation <br>(3350604)");
					subject("he","Highway Engineering (Any other)<br>(3350606)");
				?>

				<tr>
					<td><input type="submit" value="Calculate" name="calculate" class="btn"></td>
				</tr>
			</tbody>
		</table>
	</form>


<!-- Civil 6th sem -->
	<h2>Civil 6<sup>th</sup> Semester STPI</h2>
	<form action="calculate/calculate_civil_6.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>
				<?php subject("drcs","Design Of Reinforced Concrete Structures <br>(3360601)"); ?>
				<?php subject("cqcm","Construction Quality Control & Monitoring <br>(3360602)"); ?>
				<?php subject("cpm","Construction Project Managemnet <br>(3360603)"); ?>
				<?php subject("rhte","Railway , Harbour & Tunnel Engineering (Any other) <br>(3360606)"); ?>
				<?php subject("te","Traffic Engineering (Any other) <br>(3360607)"); ?>
				
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