<div class="row">
	<div class="col-md-12">
		<div class="btn-group btn-group-justified">
		  <a href="admin.php?action=messages" class="btn btn-primary">All Messages
				<?php  
          $query = mysqli_query($dbc, "SELECT COUNT(`msg_id`) FROM `admin_msgs`");
          $data = mysqli_fetch_array($query);
          echo "<span class='badge'>" .$data[0] ."</span>";
        ?>
		  </a>
		  <a href="admin.php?action=viewed_msg" class="btn btn-primary active">Viewed messages
				<?php  
          $query = mysqli_query($dbc, "SELECT COUNT(`msg_id`) FROM `admin_msgs` WHERE viewed='1'");
          $data6 = mysqli_fetch_array($query);
          echo "<span class='badge'>" .$data6[0] ."</span>";
        ?>
		  </a>
		  <a href="admin.php?action=new_messages" class="btn btn-primary">New Messages 
		  <?php  
        $query = mysqli_query($dbc, "SELECT  COUNT(`msg_id`) FROM `admin_msgs` WHERE viewed='0'");
        $data4 = mysqli_fetch_array($query);
        echo "<span class='badge text-info'>" .$data4[0] ."</span>";

      ?>
              
      </a>
		</div>
	</div>
</div>
<br>