
<div class="row">
	<div class="col-md-12">
		<div class="btn-group btn-group-justified">
		  <a href="dashboard.php?action=messages" class="btn btn-primary">Viewed Messages
				<?php  
          $query = mysqli_query($dbc, "SELECT COUNT(`msg_id`) FROM `msgs` WHERE viewed='1' AND sender='admin'");
          $data = mysqli_fetch_array($query);
          echo "<span class='badge'>" .$data[0] ."</span>";
        ?>
		  </a>
		  <a href="dashboard.php?action=new_messages" class="btn btn-primary active">New Messages 
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
      <h3 class="text-center">New Messages</h3>
    </header>
  </div>
</div>
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <ul style="list-style-type: none;">
      <?php  
        $query = mysqli_query($dbc, "SELECT * FROM msgs WHERE student_id='$student_id' AND viewed='0'");
        while ($row = mysqli_fetch_array($query)) {

        ?>
      <li>
        <div class="well well-sm bg-info">
          <div class="row">
            <div class="col-xs-9">
               1 new message from  
               <span class='label label-primary'><?php echo $row["sender"] ?></span>
            </div>
            <div class="col-xs-3">
              <form action="dashboard.php?action=read_reply&msg_id=<?php echo $row['msg_id']; ?>&student_id=<?php echo $row['student_id']; ?>" method="POST" class="form-inline">
                <input type="hidden" name="msg_id" value="<?php echo $row['msg_id']; ?>">
                <button type="submit" name="read" class="btn btn-sm btn-primary">Read Message</button>
              </form>
            </div>
          </div>
         
          
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>
