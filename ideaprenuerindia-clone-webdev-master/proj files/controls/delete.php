<?php
	require_once('config.php');
	$query = "select Id,Author,Heading from main";
	$query_run = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<style media="screen">
	body{
		background-color: #8EC5FC;
		background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
	}


	</style>
</head>

<body>
	<div class="=container">
		<?php
		if(isset($_REQUEST['Delete'])){
			//$id = $_POST['id'];
			$query1 = "DELETE from main where Id ='{$_REQUEST['id']}'";
			if($query_run1 = mysqli_query($conn,$query1)){
				//echo "Record Deleted";
			}
			else{
				echo "Unable to delete";
			}
		}
	?>
	<table align="Center" border="1px" class="table">
		<thead class="thead-dark">
			<tr>
				<th>ID</th>
				<th>Author</th>
				<th>Heading</th>
				<th>Delete</th>
			</tr>
		</thead>
		<?php
			if(!mysqli_num_rows($query_run) > 0){
				echo "No Record Found";
			}
			else{
				while($row = mysqli_fetch_assoc($query_run)){
					?>

					<tr>
						<td> <?php  echo $row['Id'];  ?> </td>
						<td> <?php  echo $row['Author'];  ?> </td>
						<td> <?php  echo $row['Heading'];  ?> </td>
						<td>
						<form action="delete.php" method="post">
							<input type = "hidden" name ="id"  value = "<?php echo $row['Id']; ?>" >
							<input class = "btn btn-danger" type = "submit" name = "Delete" value = "Delete">
							</form>
						</form>
					</tr>
			<?php
				}
			}
			?>
	</table>
	<!--
	<form action="delete.php ?>" method="post">
		<input type="text" name="id" id="del" required>
		<input class="btn btn-danger" type="submit" name="delete" value="Delete">
	</form>
	-->
	<a href="transfer.html">
<input class = "btn btn-info" type = "Submit" value="Go back" >
</a>
</div>
</body>
</html>
