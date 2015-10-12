<form method="GET">
  Кількість стовпчиків<br><input type="number" name="col" required><br>
  Кількість рядків<br><input type="number" name="row" required><br>
  <input type="submit" value="Submit">
</form>
<?php 
	if (isset($_GET['col'])&&isset($_GET['row'])){
		echo '<table border="1">';
		$col = $_GET['col'];
		$row = $_GET['row'];
		$col>20?$col=20:$col=$col;
		$col<0?$col=0:$col=$col;
		$row<0?$row=0:$row=$row;
		for ($x=0; $x < $row; $x++) { 
			echo '<tr>';
			for ($y=0; $y < $col; $y++) { 
				echo '<td>'.rand().'</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}
?>
