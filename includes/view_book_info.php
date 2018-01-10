<?php 
	$book_id =$_GET["book_id"];

?>
<div class="row">
  <div class="col-md-12">
    <header class="well well-sm">
      <h4 class="text-center">Book Information</h4>
    </header>
  </div>
</div>
<div class="row">
	<div class="col-md-4  col-md-offset-2">
		<div class="text-center">
			<img src="assets/img/pdf.png" class="img img-responsive" alt="pdf logo">
		</div>
	</div>
	<div class="col-md-4">
		<table class="table">
			<thead>
				<tr class="active">
					<th>Name</th>
					<th>Details</th>
				</tr>
			</thead>
			<tbody>
				<?php  
					$msq = mysqli_query($dbc, "SELECT * FROM books WHERE book_id='$book_id'");
					while($row = mysqli_fetch_assoc($msq)){
				?>
				<tr>
					<td>Book Name</td>
					<td><?php echo $row["book_name"]; ?></td>
				</tr>
				<tr>
					<td>Related Course</td>
					<td>
						<?php
							$q = mysqli_query($dbc, "SELECT course_name FROM courses WHERE course_id=".$row["course_id"]);
							$d = mysqli_fetch_array($q);
							echo $d["course_name"];
						?>
					</td>
				</tr>
				<tr>
					<td>Keywords</td>
					<td><?php echo $row["keywords"]; ?></td>
				</tr>
				<tr>
					<td colspan="2">
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
							<input type="hidden" name="course_id" value="<?php echo $row['course_id']; ?>">
							<input type="hidden" name="book_id" value="<?php echo $row['book_id']; ?>">
							<button type="submit" class="btn btn-primary" name="read">read book</button>
						</form>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<?php  
	if (isset($_POST["read"])) {
		$user_id  = $data["student_id"];
		$course_id = $_POST["course_id"];
		$book_id = $_POST["book_id"];

		$select = mysqli_query($dbc, "SELECT * FROM viewed_books WHERE student_id='$user_id' AND book_id='$book_id'");
		if (mysqli_num_rows($select) > 0) {
			echo "<script>window.location.assign('dashboard.php?action=read_book&book_id=$book_id');</script>";
		}else{
			if (mysqli_query($dbc, "INSERT INTO viewed_books(student_id, course_id, book_id) VALUES('$user_id','$course_id', '$book_id')")) {
				echo "<script>window.location.assign('dashboard.php?action=read_book&book_id=$book_id');</script>";
			}
		}
	
	}
?>