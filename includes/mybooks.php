<div class="row">
	<div class="col-md-12">
		<header class="well well-sm">
			<h3 class="text-center">Books you've read</h3>
		</header>
	</div>
</div>

<div class="row">
<?php
$mb = mysqli_query($dbc, "SELECT * FROM viewed_books WHERE student_id='".$data["student_id"]."'");
while($sbr = mysqli_fetch_assoc($mb)){

		$sqlq = mysqli_query($dbc, "SELECT * FROM books WHERE book_id='".$sbr["book_id"]."'");
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
	<?php }	} ?>
</div>
