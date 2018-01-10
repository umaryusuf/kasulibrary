<div class="row">
	<div class="col-md-12">
		<div class="btn-group btn-group-justified">
		  <a href="dashboard.php?action=messages" class="btn btn-primary">Viewed Messages
				<?php  
          $query = mysqli_query($dbc, "SELECT COUNT(`msg_id`) FROM `msgs`  WHERE viewed='1' AND sender='admin'");
          $data = mysqli_fetch_array($query);
          echo "<span class='badge'>" .$data[0] ."</span>";
        ?>
		  </a>
		  <a href="dashboard.php?action=new_messages" class="btn btn-primary">New Messages 
		  <?php  
        $query = mysqli_query($dbc, "SELECT  COUNT(`msg_id`) FROM `msgs` WHERE viewed='0' AND sender='admin'");
        $data4 = mysqli_fetch_array($query);
        echo "<span class='badge text-info'>" .$data4[0] ."</span>";

      ?>
      </a>
      <a href="dashboard.php?action=send_message" class="btn btn-primary active">Send Message</a>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12">
		<header class="well well-sm">
			<h3 class="text-center">
				Send Message(s)
			</h3>
		</header>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<?php  

			if (isset($_POST["reply"])) {
				if(!empty($_POST["reply_msg"])){
					$reply_msg = check_input($_POST["reply_msg"]);

					$sql = mysqli_query($dbc, "INSERT INTO msgs(student_id, sender, content) VALUES('$student_id', 'student', '$reply_msg')");
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
		<br>
		<div class="well">
			<h4>Enter your message:</h4>
			<form action="<?php $_SERVER['PHP_SELF'] ?>" role="form" method="POST">
				<div class="form-group">
					<textarea name="reply_msg" id="reply_msg" class="form-control" placeholder="type message" rows="4"></textarea>
				</div>
				<div class="row">
					<div class="col-xs-8">
						<button type="submit" name="reply" class="btn btn-primary btn-sm">Send Message</button>
					</div>
					<div class="col-xs-4">
						<a href="dashboard.php?action=messages" class="btn btn-primary btn-sm">Cancel</a>
					</div>
				</div>	
			</form>
		</div>
	</div>
</div>