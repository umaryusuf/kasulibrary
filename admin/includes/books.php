<div class="row">
	<div class="col-md-12">
		<div class="btn-group btn-group-justified">
		  <a href="admin.php?action=books" class="btn btn-primary active">All Books</a>
		  <a href="admin.php?action=add_book" class="btn btn-primary">Add Book</a>
      <a href="admin.php?action=books_read" class="btn btn-primary">Books read by students</a>
		</div>
	</div>
</div>
<div class="row">
  <div class="col-md-12">
    <header class="well well-sm">
      <h2 class="text-center">Books KASU E-Library</h2>
    </header>
  </div>
</div>
<div class="row">
  <?php
    $query = mysqli_query($dbc, "SELECT * FROM courses ORDER BY course_name");
    while($row = mysqli_fetch_assoc($query)){

  ?>
  <div class="col-md-4">
    <a href="admin.php?action=view_course_pdf&course_id=<?php echo $row['course_id']; ?>">
      <div class="well well-sm">
        <h4><?php echo $row["course_name"]; ?></h4>
      </div>
    </a>
  </div>
  <?php } ?>
</div>