<?php
	include("include/header.php");
	head("GTU Electrical STPI Calculator");
?>

<main>
<!-- Mechanical Final STPI -->
	<h2>Electrical Final Year STPI</h2>
	<form action="calculate/calculate_elec.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>
			<?php 
				subject("wecc","Wiring Estimating, Costing and Contracting <br>(3350901)");
				subject("eca","Energy Conservation & Audit <br>(3350902)");
				subject("pe","Power Electronics <br>(3350903)");
				subject("mca","Microprocessor and Controller Applications <br>(3350904)");
				subject("etc","Electric Traction and Control OR (WSES) OR (SEM) <br>(3350907)");
				subject("sp","Switchgear & Protection <br>(3360901)");
				subject("icm","Installation, Commissioning And Maintenance <br>(3360902)");
				subject("mtcb","Maintenance Of Transformer And Circuit Breaker  OR (PSOC) OR (DPEEM) <br>(3360907)");
				subject("ebc","Electrification Of Building Complexes OR (SEP) OR (ED)<br>(3360908)");
			?>

				<tr>
					<td><input type="submit" value="calculate" name="totalstpi"></td>
				</tr>
			</tbody>
		</table>
	</form>

<!-- Electrical 5th sem -->
	<h2>Electrical 5<sup>th</sup> Semester STPI</h2>
	<form action="calculate/calculate_elec_5.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>

			<?php 
				subject("wecc","Wiring Estimating, Costing and Contracting <br>(3350901)");
				subject("eca","Energy Conservation & Audit <br>(3350902)");
				subject("pe","Power Electronics <br>(3350903)");
				subject("mca","Microprocessor and Controller Applications <br>(3350904)");
				subject("etc","Electric Traction and Control OR (WSES) OR (SEM) <br>(3350907)");
			?>

				<tr>
					<td><input type="submit" value="Calculate" name="calculate" class="btn"></td>
				</tr>
			</tbody>
		</table>
	</form>


<!-- Electrical 6th sem -->
<h2>Electrical 6<sup>th</sup> Semester STPI</h2>
	<form action="calculate/calculate_elec_6.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>
			
			<?php 
				subject("sp","Switchgear & Protection <br>(3360901)");
				subject("icm","Installation, Commissioning And Maintenance <br>(3360902)");
				subject("mtcb","Maintenance Of Transformer And Circuit Breaker  OR (PSOC) OR (DPEEM) <br>(3360907)");
				subject("ebc","Electrification Of Building Complexes OR (SEP) OR (ED)<br>(3360908)");
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