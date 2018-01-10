<div class="row">
	<div class="col-md-12">
		<header class="well well-sm">
			<h3 class="text-center">
				Read/Reply Message(s)
			</h3>
		</header>
	</div>
</div>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<?php
			$std_id = $_GET["student_id"];

			if (isset($_POST["reply"])) {
				if(!empty($_POST["reply_msg"])){
					$reply_msg = check_input($_POST["reply_msg"]);

					$sql = mysqli_query($dbc, "INSERT INTO msgs(student_id, sender, content) VALUES('$std_id', 'admin', '$reply_msg')");
					if ($sql) {
						echo "
						<div class='alert alert-success'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Sucess: message sent sucessfully</strong>
						</div>";
					} else {
						echo "
						<div class='alert alert-danger'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Oops: Error replying message.</strong>
						</div>";
					}
				}else{
					echo "
						<div class='alert alert-danger'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Oops: message is empty.</strong>
						</div>";
				}	

			}
		?>
	</div>
</div>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
	<?php  

		$read = $_GET["msg_id"];

		$q = mysqli_query($dbc, "UPDATE msgs SET viewed='1' WHERE msg_id='$read'");
		if($q){
		?>
			<div class="panel panel-default">
				<div class="panel-heading color">
					Messages: <i class="fa fa-comments"></i>
				</div>

		    <div class="panel-body" style="height: 300px;overflow-y: scroll;">
					<?php  
						$sql = mysqli_query($dbc, "SELECT * FROM msgs WHERE student_id='$std_id'");
						if (mysqli_num_rows($sql) > 0) {
							while($r = mysqli_fetch_array($sql)){		
					?>
					<div class="well well-sm">
						<h5><span class="label label-primary"><?php echo $r["sender"]; ?></span>:</h5>
						<p><?php echo $r["content"]; ?></p>
					</div>
					<?php } }?>	
		    </div>

		    <div class="panel-footer">
		    	<form action="<?php $_SERVER['PHP_SELF'] ?>" role="form" method="POST">
						<div class="form-group">
							<textarea name="reply_msg" id="reply_msg" class="form-control" placeholder="type message" rows="4"></textarea>
						</div>
						<div class="row">
							<div class="col-xs-8">
								<button type="submit" name="reply" class="btn btn-primary btn-sm">Send Message</button>
							</div>
							<div class="col-xs-4">
								<a href="admin.php?action=messages" class="btn btn-primary btn-sm">Cancel</a>
							</div>
						</div>	
					</form>	
		    </div>
		  </div>
		<?php
		}else{
			echo "<script>alert('Error opening message')</script>";
		}

	?>
	</div>
</div>
