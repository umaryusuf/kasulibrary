<?php  
	$search = filter_var($_GET["q"], FILTER_SANITIZE_STRING);
?>
<div class="row">
	<div class="col-md-12">
		<?php

		$search_query = @mysqli_query($dbc, "SELECT * FROM `books` WHERE `book_name` LIKE '%$search%' OR `keywords` LIKE '%$search%'");
		if (mysqli_num_rows($search_query) > 0) {
			
			while ($row = mysqli_fetch_assoc($search_query)) {
		?>
		<div class="col-xs-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h6><?php echo $row["book_name"]; ?></h6>
				</div>
				<a href="admin.php?action=book_info&book_id=<?php echo $row['book_id']; ?>" title="click to read book" data-toggle="tooltip" title="click to read book">
					
					<div class="panel-body">
						<div class="text-center">
							<img src="../assets/img/pdf.png" class="img img-responsive" alt="pdf logo">
						</div>
					</div>
				</a>
				<div class="panel-footer">
					<a href="admin.php?action=update_book&book_id=<?php echo $row['book_id']; ?>" class="btn btn-primary btn-block">Update Book Info</a>
				</div>
			</div>
		</div>
		<?php
			}
		}else {
		?>
		<div class="well well-sm">
			<h3 class="text-center">Oops): no search result found</h3>
		</div>
		<?php } ?>
	</div>
</div>