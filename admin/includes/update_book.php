<?php $b_id = $_GET["book_id"]; ?>
<div class="row">
	<div class="col-md-12">
		<header class="well well-sm">
      <h2 class="text-center">Update Book Information</h2>
    </header>
	</div>
</div>
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <?php
    	if (isset($_POST["Update_book_info"])) {
    		$error = false;
				$book_name_err = $course_id_err = $keywords_err = "";

				if(empty($_POST['book_name'])){
			  	$error = true;
			  	$book_name_err = "Book name is empty";
			  }else{
			  	$_book_name = $_POST['book_name'];
			  }
				
				if(empty($_POST['course_id'])){
					$error = true;
			  	$course_id_err = "Related course is empty";
			  }else{
			  	$_course_id = $_POST['course_id'];
			  }

			  if(empty($_POST['keywords'])){
			  	$error = true;
			  	$keywords_err = "Book keywords is empty";
			  }else{
			  	$_keywords = $_POST['keywords'];
			  }

			  if(!$error){
			  	$sql = "UPDATE `books` SET `book_name`= '$_book_name', `course_id`= '$_course_id', `keywords`='$_keywords' WHERE `book_id`='$b_id'";

					if(mysqli_query($dbc, $sql)){
						echo "
						<div class='alert alert-success'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Sucess: Book updated sucessfully</strong>
						</div>";
					}else{
						echo "
						<div class='alert alert-danger'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Oops: Error updating book.</strong>
						</div>";
					}
			  }

			  if (!empty($book_name_err)) {
			  	echo "
						<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Oops: ". $book_name_err.".</strong>
						</div>";
			  }elseif (!empty($course_id_err)) {
			  	echo "
						<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Oops: ". $course_id_err.".</strong>
						</div>";
			  }elseif (!empty($keywords_err)) {
			  	echo "
						<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Oops: ". $keywords_err.".</strong>
						</div>";
			  }

    	}
	
    ?>
    <div class="well">
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
				<?php  
					$getbq = mysqli_query($dbc, "SELECT * FROM books WHERE book_id='$b_id'");

    			while ($r = mysqli_fetch_assoc($getbq)) {
				?>
				<div class="form-group">
					<label for="book_name">Book Name:</label>
					<input type="text" class="form-control" name="book_name" value="<?php echo $r['book_name']; ?>" id="book_name" required>
				</div>
				<div class="form-group">
					<label for="course_id">Related Course:</label>
					<select name="course_id" id="course_id" class="form-control">
						<option selected value="<?php echo $r['course_id'] ?>">
							<?php  
								$sv = mysqli_query($dbc, "SELECT course_name FROM courses WHERE course_id='".$r['course_id']."'");
								$svn = mysqli_fetch_assoc($sv);
								echo $svn["course_name"];
							?>
						</option>
						<?php  
							$sc = mysqli_query($dbc, "SELECT * FROM courses");
								while ($rd = mysqli_fetch_assoc($sc)) {
							?>
							<option value="<?php echo $rd['course_id']; ?>"><?php echo $rd['course_name']; ?></option>
							<?php	} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="keywords">Keywords:</label>
					<input type="text" class="form-control" name="keywords" value="<?php echo $r['keywords']; ?>" id="keywords" required>
				</div>
    		<?php	} ?>
				<button name="Update_book_info" class="btn btn-primary btn-block">Update info</button>
			</form>
		</div>
  </div>
</div>