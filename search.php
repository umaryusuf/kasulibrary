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
		<div class="col-xs-6 col-md-2" style="height: 215px; max-height: 215px">
		<a href="dashboard.php?action=view_book_info&book_id=<?php echo $row['book_id'];?>">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="text-center">
						<img src="assets/img/pdf.png" class="img img-responsive" alt="pdf logo">
					</div>
				</div>
				<div class="panel-footer">
					<h6><?php echo $row["book_name"]; ?></h6>
				</div>
			</div>
		</a>
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