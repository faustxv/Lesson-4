<form method="POST">
	<input type="number" name="num" required>
	<select name="operator">
    <option>sqrt</option>
    <option>pow,2</option>
  </select><br>
	<input type="submit" value="Вирахувати">
</form>
<?php 
	if (isset($_POST['num'])){
		$_POST['operator']=='sqrt'?$a=sqrt($_POST['num']):$a=pow($_POST['num'], 2);
			echo '<input type="number" value='.$a.' >';
	}
?>