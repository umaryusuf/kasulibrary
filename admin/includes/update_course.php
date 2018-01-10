<div class="row">
  <div class="col-md-12">
    <header class="well well-sm">
      <h2 class="text-center">Update Course KASU E-Library</h2>
    </header>
  </div>
</div>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<?php 
			$course_id = $_GET["course_id"];

			if(isset($_POST["update_course"])){
				$error = false;
				if (empty($_POST["course_name"])) {
					echo "
					<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<strong>Oops: course name is empty.</strong>
					</div>";
				}else{
					$course_name = check_input($_POST["course_name"]);
					// check if course exist
					$query = "SELECT course_name FROM courses WHERE course_name='$course_name'";
			    $result = mysqli_query($dbc, $query);
			    $count = mysqli_num_rows($result);
			    if($count!=0){
			    	$error = true;
			    	echo "
						<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Success: Course already exist.</strong>
						</div>";
			    }
				}

				if(!$error){
					$query = mysqli_query($dbc, "UPDATE courses SET course_name='$course_name' WHERE course_id='$course_id'");

					if ($query) {
						echo "
						<div class='alert alert-success'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Success: Course updated successfully.</strong>
						</div>";
					}else{
						echo "
						<div class='alert alert-danger'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Oops: Error updating course.</strong>
						</div>";
					}
				}

			}
		?>
		<br>
		<div class="well well-lg">
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
				<?php  
					$query = mysqli_query($dbc, "SELECT * FROM courses WHERE course_id='$course_id'");
					while($r = mysqli_fetch_array($query)){
				?>
				<div class="form-group">
					<label for="course_name">Course Name:</label>
					<input type="text" name="course_name" id="course_name" placeholder="course name" class="form-control" value="<?php echo $r['course_name']; ?>" required>
				</div>
				<?php } ?>
				<button class="btn btn-primary btn-block" name="update_course">Update Course</button>
			</form>
		</div>
	</div>
</div>