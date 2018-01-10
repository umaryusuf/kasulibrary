<div class="row">
	<div class="col-md-12">
		<div class="btn-group btn-group-justified">
		  <a href="admin.php?action=courses" class="btn btn-primary">All Courses</a>
		  <a href="admin.php?action=add_course" class="btn btn-primary active">Add Course</a>
		</div>
	</div>
</div>
<div class="row">
  <div class="col-md-12">
    <header class="well well-sm">
      <h2 class="text-center">Add Courses KASU E-Library</h2>
    </header>
  </div>
</div>
<br>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<?php  
			if(isset($_POST["add_course"])){
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
					$query = mysqli_query($dbc, "INSERT INTO courses(course_name) VALUES('$course_name')");

					if ($query) {
						echo "
						<div class='alert alert-success'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Success: Course added successfully.</strong>
						</div>";
					}else{
						echo "
						<div class='alert alert-danger'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Oops: Error adding course.</strong>
						</div>";
					}
				}

			}
		?>
		<br>
		<div class="well well-lg">
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
				<div class="form-group">
					<label for="course_name">Course Name:</label>
					<input type="text" name="course_name" id="course_name" placeholder="course name" class="form-control" required>
				</div>
				<button class="btn btn-primary btn-block" name="add_course">Add Course</button>
			</form>
		</div>
	</div>
</div>