<?php 
require_once ('../include/component.php');
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
	<div id="goback_btn" onclick="goBack()">
		<img src="../img/arrow.png" alt="bake_arrow">
	</div>
<main>
	<table>
		<thead>
			<?php title(); ?>
		</thead>
		<tbody>
		<?php
			$im = $_POST['im'];
			$mt2 = $_POST['mt2'];
			$prpt = $_POST['prpt'];
			$uicp = $_POST['uicp'];
			$cet = $_POST['cet'];

		?>
			<tr>
				<td>Industrial Management <br>(3350501)</td>
				<td>
					<?php echo $_POST['im']; ?>
				</td>
			</tr>
			<tr>
				<td>Mass Transfer - II <br>(3350502)</td>
				<td>
					<?php echo $_POST['mt2']; ?>
				</td>
			</tr>
			<tr>
				<td>Petroleum Refining & Petrochemical Technology <br>(3350503)</td>
				<td>
					<?php echo $_POST['prpt']; ?>
				</td>
			</tr>
			<tr>
				<td>Utilities And Instrumentation In Chemical Plant <br>(3350504)</td>
				<td>
					<?php echo $_POST['uicp']; ?>
				</td>
			</tr>
			<tr>
				<td>Chemical Engineering Thermodynamics <br>(3350505)</td>
				<td>
					<?php echo $_POST['cet']; ?>
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
// Chemical 5th sem
$grade = array($im,$mt2,$prpt,$uicp,$cet);

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

	$credit_im = 3;
	$credit_mt2 = 8;
	$credit_prpt = 6;
	$credit_uicp = 8;
	$credit_cet = 5;

	if (in_array("No", $marks)) {
		echo '<p class="ans">Please choose all grade!</p>';
	} else {
		$mark_im = $credit_im * $marks[0];
		$mark_mt2 = $credit_mt2 * $marks[1];
		$mark_prpt = $credit_prpt * $marks[2];
		$mark_uicp = $credit_uicp * $marks[3];
		$mark_cet = $credit_cet * $marks[4];
		
		$stpi_calculetion = ($mark_im+$mark_mt2+$mark_prpt+$mark_uicp+$mark_cet) / ($credit_im+$credit_mt2+$credit_prpt+$credit_uicp+$credit_cet);

		echo '<p class="ans">5<sup>th</sup> Semester STPI : ' . round($stpi_calculetion,2) . '</p>';
		return $stpi_calculetion;
	}
	
}

mark($grade);

 ?>