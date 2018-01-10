<?php  
$b_id = $_GET["book_id"];

$my = mysqli_query($dbc, "SELECT book FROM books WHERE book_id='$b_id'");
$ba = mysqli_fetch_array($my);
 $book = $ba['book'];

?>
<div class="row">
	<div class="col-md-12">
		<iframe src="books/<?php echo $book; ?>" width="100%" style="min-height: 90vh; height: 100%; max-height: 100%" ></iframe>
	</div>
</div>