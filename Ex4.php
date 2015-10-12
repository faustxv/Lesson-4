<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table Create</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-inverse">
	  <div class="container">
			<form class="form-inline" method="POST">
			  <div class="form-group">
			    <input type="number" name="col" class="form-control" placeholder="Кількість стовпчиків">
			  </div>
			  <div class="form-group">
			    <label>X</label>
			    <input type="number" name="row" class="form-control" placeholder="Кількість рядків">
			  </div>
			  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-th"></span> Побудувати</button>
			</form>
		</div>	
	</nav>
		<div class="container t1">
			<?php 
				if (isset($_POST['col'])&&isset($_POST['row'])){
					echo '<table class="table table-bordered ">';
					$col = $_POST['col'];
					$row = $_POST['row'];
					$col>20?$col=20:$col=$col;
					$col<0?$col=0:$col=$col;
					$row<0?$row=0:$row=$row;
					for ($x=0; $x < $row; $x++) { 
						print '<tr>';
						for ($y=0; $y < $col; $y++) { 
							print '<td>'.rand().'</td>';
						}
						print '</tr>';
					}
					echo '</table>';
				}
			?>
		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>