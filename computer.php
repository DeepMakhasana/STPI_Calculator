<?php
	include("include/header.php");
	head("GTU Computer STPI Calculator");
?>

<main>
<!-- Computer Final STPI -->
	<h2>Computer Final Year STPI</h2>
	<form action="calculate/calculate_computer.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>
			<?php 
				subject("cmts","Computer Maintenance and Trouble Shooting <br>(3350701)"); 
				subject("dwpd","Dynamic Web Page Development <br>(3350702)");
				subject("jp","Java Programming <br>(3350703)");
				subject("cns","Computer and Network Security OR (MAT) <br>(3350704)");
                subject("ajp","Advance Java Programming <br>(3360701)"); 
				subject("ppud","Professional Practices Using Database <br>(3360702)");
				subject("nma","Networking Management & Administration OR (DWSA) <br>(3360703)");
				subject("mcad","Mobile Computing and Application Development OR (AWT) <br>(3360704)");
			?>

				<tr>
					<td><input type="submit" value="calculate" name="totalstpi"></td>
				</tr>
			</tbody>
		</table>
	</form>

<!-- Computer 5th sem -->
	<h2>Computer 5<sup>th</sup> Semester STPI</h2>
	<form action="calculate/calculate_computer_5.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>

			<?php 
				subject("cmts","Computer Maintenance and Trouble Shooting <br>(3350701)"); 
				subject("dwpd","Dynamic Web Page Development <br>(3350702)");
				subject("jp","Java Programming <br>(3350703)");
				subject("cns","Computer and Network Security OR (MAT) <br>(3350704)");
			?>
	
				<tr>
					<td><input type="submit" value="Calculate" name="calculate" class="btn"></td>
				</tr>
			</tbody>
		</table>
	</form>


<!-- Computer 6th sem -->
	<h2>Computer 6<sup>th</sup> Semester STPI</h2>
	<form action="calculate/calculate_computer_6.php" method="post">
		<table>
			<thead>
				<?php title(); ?>
			</thead>
			<tbody>

			<?php 
				subject("ajp","Advance Java Programming <br>(3360701)"); 
				subject("ppud","Professional Practices Using Database <br>(3360702)");
				subject("nma","Networking Management & Administration OR (DWSA) <br>(3360703)");
				subject("mcad","Mobile Computing and Application Development OR (AWT) <br>(3360704)");
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