<?php
$course_id = $_GET["course_id"];
?>
<div class="row">
  <div class="col-md-12">
    <header class="well well-sm">
      <h4 class="text-center">
			<?php  
				$cn = mysqli_query($dbc, "SELECT course_name FROM courses WHERE course_id='$course_id'");
				$fcn = mysqli_fetch_assoc($cn);
				echo $fcn["course_name"];
			?>
       Books</h4>
    </header>
  </div>
</div>
<div class="row">
	<?php  
		$sqlq = mysqli_query($dbc, "SELECT * FROM books WHERE course_id='$course_id' ORDER BY `book_name`");
		while ($r = mysqli_fetch_assoc($sqlq)) {	
			$book_id = $r["book_id"];
	?>
	<div class="col-xs-6 col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
					<h6><?php echo $r["book_name"]; ?></h6>
				</div>
			<a href="admin.php?action=book_info&book_id=<?php echo $book_id; ?>" title="click to read book" data-toggle="tooltip" title="click to read book">
				
				<div class="panel-body">
					<div class="text-center">
						<img src="../assets/img/pdf.png" class="img img-responsive" alt="pdf logo">
					</div>
				</div>
			</a>
				<div class="panel-footer">
					<a href="admin.php?action=update_book&book_id=<?php echo $book_id; ?>" class="btn btn-primary btn-block">Update Book Info</a>
				</div>
			</div>
		
	</div>
	<?php	} ?>
</div>