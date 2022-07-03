<?php 
	require '../include/component.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>calculation</title>
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<!-- CSS Fill -->
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<h1 class="calculation">CALCULATION</h1>
	<div id="goback_btn" onclick="goBack()"><img src="../img/arrow.png" alt="bake_arrow"></div>
<main>
	<table>
		<thead>
			<?php title(); ?>
		</thead>
		<tbody>
		<?php
			$dss = $_POST['dss'];
			$ct = $_POST['ct'];
			$wsse = $_POST['wsse'];
			$ecv = $_POST['ecv'];
			$he = $_POST['he'];

		?>
			<tr>
				<td>Design of Steel Structure <br>(3350601)</td>
				<td>
					<?php echo $dss; ?>
				</td>
			</tr>
			<tr>
				<td>Concrete Technology <br>(3350602)</td>
				<td>
					<?php echo $ct; ?>
				</td>
			</tr>
			<tr>
				<td>Water Supply & Sanitary Engineering <br>(3350603)</td>
				<td>
					<?php echo $wsse; ?>
				</td>
			</tr>
			<tr>
				<td>Estimating , Costing & Valuation <br>(3350604)</td>
				<td>
					<?php echo $ecv; ?>
				</td>
			</tr>
			<tr>
				<td>Highway Engineering (Any other)<br>(3350606)</td>
				<td>
					<?php echo $he; ?>
				</td>
			</tr>
		</tbody>
	</table>
</main>

	<!-- Script Fill -->
    <script src="../js/script.js"></script>
</body>
</html>
<?php 
// civil 5th sem
$grade = array($dss,$ct,$wsse,$ecv,$he);

function mark($grades)
{
	$marks = array();
	for ($i=0; $i <= 4; $i++) { 
		switch ($grades[$i]) {
			case 'AA':
				array_push($marks, 10);
				break;
			case 'AB':
				array_push($marks, 9);
				break;
			case 'BB':
				array_push($marks, 8);
				break;
			case 'BC':
				array_push($marks, 7);
				break;
			case 'CC':
				array_push($marks, 6);
				break;
			case 'CD':
				array_push($marks, 5);
				break;
			case 'DD':
				array_push($marks, 4);
				break;
			case 'FF':
				array_push($marks, 3);
				break;
			default:
				array_push($marks, "No");
		}
	}
	// print_r($marks);

	$credit_dss = 7;
	$credit_ct = 5;
	$credit_wsse = 5;
	$credit_ecv = 7;
	$credit_he = 5;

	if (in_array("No", $marks)) {
		echo '<p class="ans">Please choose all grade!</p>';
	} else {
		$mark_dss = $credit_dss * $marks[0];
		$mark_ct = $credit_ct * $marks[1];
		$mark_wsse = $credit_wsse * $marks[2];
		$mark_ecv = $credit_ecv * $marks[3];
		$mark_he = $credit_he * $marks[4];
		
		$stpi_calculetion = ($mark_dss+$mark_ct+$mark_wsse+$mark_ecv+$mark_he) / ($credit_dss+$credit_ct+$credit_wsse+$credit_ecv+$credit_he);

		echo '<p class="ans">5<sup>th</sup> Semester STPI : ' . round($stpi_calculetion,2) . '</p>';
		return $stpi_calculetion;
	}
	
}

mark($grade);

 ?>