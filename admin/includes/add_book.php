<div class="row">
	<div class="col-md-12">
		<div class="btn-group btn-group-justified">
		  <a href="admin.php?action=books" class="btn btn-primary">All Books</a>
		  <a href="admin.php?action=add_book" class="btn btn-primary active">Add Book</a>
		  <a href="admin.php?action=books_read" class="btn btn-primary">Books read by students</a>
		</div>
	</div>
</div>
<div class="row">
  <div class="col-md-12">
    <header class="well well-sm">
      <h2 class="text-center">Add Book KASU E-Library</h2>
    </header>
  </div>
</div>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<?php  
			if (isset($_POST["add_book"])) {
				$error = false;
				$book_name_err = $course_id_err = $keywords_err = "";

				$pdf_name = $_FILES["book_upload"]["name"];
				$pdf_tmp_name = $_FILES["book_upload"]["tmp_name"];

				if(empty($_POST['book_name'])){
			  	$error = true;
			  	$book_name_err = "Book name is empty";
			  }else{
			  	$book_name = $_POST['book_name'];
			  }
				
				if(empty($_POST['course_id'])){
					$error = true;
			  	$course_id_err = "Related course is empty";
			  }else{
			  	$course_id = $_POST['course_id'];
			  }

			  if(empty($_POST['keywords'])){
			  	$error = true;
			  	$keywords_err = "Book keywords is empty";
			  }else{
			  	$keywords = $_POST['keywords'];
			  }

			  if(!$error){
					$move = move_uploaded_file($_FILES["book_upload"]["tmp_name"], "books/$pdf_name");
			  	$sql = "INSERT INTO `books`(`book`, `book_name`, `course_id`, `keywords`) VALUES('$pdf_name','$book_name','$course_id','$keywords')";

					if($move && mysqli_query($dbc, $sql)){
						echo "
						<div class='alert alert-success'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Sucess: Book added sucessfully</strong>
						</div>";
					}else{
						echo "
						<div class='alert alert-danger'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Oops: Error adding book".mysqli_error($dbc).".</strong>
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
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="book_upload">Upload Book:
						<input type="file" name="book_upload" id="book_upload" class="form-control" required>
					</label>
				</div>
				<div class="form-group">
					<label for="book_name">Book Name:</label>
					<input type="text" name="book_name" id="book_name" class="form-control" placeholder="book name" required>
				</div>
				<div class="form-group">
					<label for="course_id">Related Course:</label>
					<select name="course_id" id="course_id" class="form-control">
						<option value=""> -- Related Course -- </option>
						<?php  
							$sq = mysqli_query($dbc, "SELECT * FROM courses ORDER BY course_name");
							while ($rd = mysqli_fetch_array($sq)) {
						?>
						<option value="<?php echo $rd['course_id']; ?>"><?php echo $rd["course_name"]; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="keywords">Keywords:</label>
					<input type="text" name="keywords" id="keywords" class="form-control" placeholder="book keywords eg. algebra, math, computer..." required>
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="add_book">Add book</button>
			</form>
		</div>
	</div>
</div>