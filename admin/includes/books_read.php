<div class="row">
	<div class="col-md-12">
		<div class="btn-group btn-group-justified">
		  <a href="admin.php?action=books" class="btn btn-primary">All Books</a>
		  <a href="admin.php?action=add_book" class="btn btn-primary">Add Book</a>
		  <a href="admin.php?action=books_read" class="btn btn-primary active">Books read by students</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<header class="well well-sm">
			<h3 class="text-center">books read by students</h3>
		</header>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<table class="table table-striped">
			<thead>
				<tr class="active">
					<th>Course Name</th>
					<th>Book Name</th>
					<th>Student Name</th>
				</tr>
			</thead>
			<tbody>
				<?php  
					$vbq = mysqli_query($dbc, "SELECT * FROM viewed_books");
					while($row = mysqli_fetch_array($vbq)){
				?>
				<tr>
					<td>
						<?php  
						$sq1 = mysqli_query($dbc, "SELECT course_name FROM courses WHERE course_id='".$row["course_id"]."'");
						$sc = mysqli_fetch_array($sq1);
						echo $sc['course_name'];
						?>
					</td>
					<td>
						<?php  
						$sq2 = mysqli_query($dbc, "SELECT book_name FROM books WHERE book_id='".$row["book_id"]."'");
						$sc1 = mysqli_fetch_array($sq2);
						echo $sc1['book_name'];
						?>
					</td>
					<td>
						<?php  
						$sq3 = mysqli_query($dbc, "SELECT fullname FROM students WHERE student_id='".$row["student_id"]."'");
						$sc2 = mysqli_fetch_array($sq3);
						echo $sc2['fullname'];
						?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>