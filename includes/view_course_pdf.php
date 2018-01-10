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
		$sqlq = mysqli_query($dbc, "SELECT * FROM books WHERE course_id='$course_id'");
		while ($r = mysqli_fetch_assoc($sqlq)) {	
		
	?>
	<div class="col-xs-6 col-md-2">
		<a href="dashboard.php?action=view_book_info&book_id=<?php echo $r['book_id'];?>">
			<div class="panel panel-default" style="height: 215px; max-height: 215px">
				<div class="panel-body">
					<div class="text-center">
						<img src="assets/img/pdf.png" class="img img-responsive" alt="pdf logo">
					</div>
				</div>
				<div class="panel-footer">
					<h6><?php echo $r["book_name"]; ?></h6>
				</div>
			</div>
		</a>
	</div>
	<?php 	} ?>
</div>