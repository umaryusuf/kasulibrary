<div class="row">
  <div class="col-md-12">
    <header class="well well-sm">
      <h2 class="text-center">Welcome to KASU E-Library</h2>
    </header>
  </div>
</div>
<div class="row">
  <?php
    $query = mysqli_query($dbc, "SELECT * FROM courses ORDER BY course_name");
    while($row = mysqli_fetch_assoc($query)){

  ?>
  <div class="col-md-4">
    <a href="dashboard.php?action=view_course_pdf&course_id=<?php echo $row['course_id']; ?>">
      <div class="well well-sm">
        <h4><?php echo $row["course_name"]. " Department lib."; ?></h4>
      </div>
    </a>
  </div>
  <?php } ?>
</div>