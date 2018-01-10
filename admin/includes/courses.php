<div class="row">
	<div class="col-md-12">
		<div class="btn-group btn-group-justified">
		  <a href="admin.php?action=courses" class="btn btn-primary active">All Courses</a>
		  <a href="admin.php?action=add_course" class="btn btn-primary">Add Course</a>
		</div>
	</div>
</div>
<div class="row">
  <div class="col-md-12">
    <header class="well well-sm">
      <h2 class="text-center">Courses KASU E-Library</h2>
    </header>
  </div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<ul style="list-style-type: none;">
			<?php  
				$query = mysqli_query($dbc, "SELECT * FROM courses");
				if (mysqli_num_rows($query) > 0) {
					while ($row = mysqli_fetch_array($query)) {
			?>
				<li>
					<div class="well well-sm">
						<div class="row">
							<div class="col-xs-8">
								<?php echo $row["course_name"]; ?>
							</div>
							<div class="col-xs-4">
								<a href="admin.php?action=update_course&course_id=<?php echo $row['course_id']; ?>">Edit Course</a>
							</div>
						</div>
					</div>
				</li>
			<?php 
					}
				}
			?>
		</ul>
	</div>
</div>