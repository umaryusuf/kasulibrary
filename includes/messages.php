<div class="row">
	<div class="col-md-12">
		<div class="btn-group btn-group-justified">
		  <a href="dashboard.php?action=messages" class="btn btn-primary active">Viewed Messages
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
      <a href="dashboard.php?action=send_message" class="btn btn-primary">Send Message</a>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12">
		<header class="well well-sm">
			<h3 class="text-center">All Messages</h3>
		</header>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<table class="table table-striped">
			<thead>
				<tr class="active">
					<th>Student Info</th>
					<th>Read/Reply</th>
				</tr>
			</thead>
			<tbody>
				<?php  
				$query = mysqli_query($dbc, "SELECT DISTINCT * FROM msgs WHERE student_id='$student_id' AND sender='admin' ORDER BY msg_id DESC");
					if (mysqli_num_rows($query) > 0) {
						while ($row = mysqli_fetch_array($query)) {
						$student_id = $row['student_id'];
					
				
				?>
				<tr>
					<td>
						Message from 
						 <span class='label label-primary'><?php echo $row["sender"]; ?></
					</td>
					<td>
						<a href="dashboard.php?action=read_reply&msg_id=<?php echo $row['msg_id']; ?>&student_id=<?php echo $student_id ?>" class="btn btn-primary btn-sm">Read/Reply</a>
					</td>
				</tr>
				<?php } } ?>
			</tbody>
		</table>
	</div>
</div>