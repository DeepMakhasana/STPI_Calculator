<?php 
function title()
{
	$title = "<tr>
				<th>Subject</th>
				<th>(Theory ESE) Grade</th>
			</tr>";
	echo $title;
}

function subject($name,$subject_name) {
	$sub = "<tr>
				<td><label for=\"$name\">$subject_name</label></td>
				<td>
					<select name=\"$name\">
						<option value=\"grade\">Grade</option>
						<option value=\"AA\">AA</option>
						<option value=\"AB\">AB</option>
						<option value=\"BB\">BB</option>
						<option value=\"BC\">BC</option>
						<option value=\"CC\">CC</option>
						<option value=\"CD\">CD</option>
						<option value=\"DD\">DD</option>
						<option value=\"FF\">FF</option>
					</select>
				</td>
			</tr>";
	echo $sub;
}

 ?>