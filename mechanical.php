<?php
	include("include/header.php");
	head("GTU Mechanical STPI Calculator");
?>

<main>
<!-- Mechanical Final STPI -->
	<h2>Mechanical Final Year STPI</h2>
	<form action="calculate/calculate_mech.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>
			<?php 
				subject("te2","Thermal Engineering - II <br>(3351901)"); 
				subject("dme","Design of Machine Elements <br>(3351902)");
				subject("me3","Manufacturing Engineering - III <br>(3351903)");
				subject("ie","Industrial Engineering <br>(3351904)");
				subject("seed","Self Employement and Entrepreneurship Development <br>(3351906)");
				subject("ecc","Estimating, Costing and Contracting <br>(3351905)");
				subject("cam","Computer Aided Manufacturing <br>(3361901)"); 
				subject("tool","Tool Engineering <br>(3361902)");
				subject("im","Industrial Management <br>(3361903)");
				subject("ppe","Manufacturing Systems OR (PPE)<br>(3361904)");
				subject("tsee","Fabrication Technology OR (TSEE)<br>(3361905)");
			?>

				<tr>
					<td><input type="submit" value="calculate" name="totalstpi"></td>
				</tr>
			</tbody>
		</table>
	</form>

<!-- Mechanical 5th sem -->
	<h2>Mechanical 5<sup>th</sup> Semester STPI</h2>
	<form action="calculate/calculate_mech_5.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>

			<?php 
				subject("te2","Thermal Engineering - II <br>(3351901)"); 
				subject("dme","Design of Machine Elements <br>(3351902)");
				subject("me3","Manufacturing Engineering - III <br>(3351903)");
				subject("ie","Industrial Engineering <br>(3351904)");
				subject("seed","Self Employement and Entrepreneurship Development <br>(3351906)");
				subject("ecc","Estimating, Costing and Contracting <br>(3351905)");
			?>
	
				<tr>
					<td><input type="submit" value="Calculate" name="calculate" class="btn"></td>
				</tr>
			</tbody>
		</table>
	</form>


<!-- Mechanical 6th sem -->
	<h2>Mechanical 6<sup>th</sup> Semester STPI</h2>
	<form action="calculate/calculate_mech_6.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>

			<?php 
				subject("cam","Computer Aided Manufacturing <br>(3361901)"); 
				subject("tool","Tool Engineering <br>(3361902)");
				subject("im","Industrial Management <br>(3361903)");
				subject("ppe","Manufacturing Systems OR (PPE)<br>(3361904)");
				subject("tsee","Fabrication Technology OR (TSEE)<br>(3361905)");
			?>
				
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