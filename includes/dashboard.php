<div class="row">
	<div class="col-md-12">
	  <header class="text-center">
	  	<div class="well">
        <h2><strong>Welcome to KASU E-Library</strong></h2>
        <h3 class="text-success"><strong>Your account status:</strong></h3>
      </div>
	  </header>
	  <br>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-green">
      <div class="panel-heading">
        <br>
        <div class="row">
          <div class="col-xs-3">
              <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge bold">My Profile</div>
            <br>
            <div>Profile Details!</div>
          </div>
        </div>
        <br>
      </div>
      <a href="dashboard.php?action=view_profile">
        <div class="panel-footer">
          <span class="pull-left">View profile</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
	  </div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-yellow">
      <div class="panel-heading">
        <br>
        <div class="row">
          <div class="col-xs-3">
              <i class="fa fa-book fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge bold">My books
            <?php  
              $query = mysqli_query($dbc, "SELECT COUNT(`viewed_id`) FROM `viewed_books` WHERE `student_id`='$student_id'");
              $data1 = mysqli_fetch_array($query);
              echo "<span class='label label-primary'>" .$data1[0] ."</span>";
            ?>
            </div>
            <br>
            <div>Book you've read</div>
          </div>
        </div>
        <br>
      </div>
      <a href="dashboard.php?action=mybooks">
          <div class="panel-footer">
            <span class="pull-left">My books</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
      </a>
    </div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
      <div class="panel-heading">
        <br>
        <div class="row">
          <div class="col-xs-3">
              <i class="fa fa-file fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
              <div class="huge bold">E-Library</div>
              <div>E-Library</div>
          </div>
        </div>
        <br>
      </div>
      <a href="dashboard.php?action=e_library">
          <div class="panel-footer">
            <span class="pull-left">Go to E-Library</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
      </a>
  	</div>
	</div>
</div>
<div class="row">
   <div class="col-md-4">
    <div class="panel panel-yellow">
      <div class="panel-heading">
        <br>
        <div class="row">
          <div class="col-xs-3">
              <i class="fa fa-envelope-o fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge bold">My Messages
            <?php  
              $query = mysqli_query($dbc, "SELECT COUNT(`msg_id`) FROM `msgs` WHERE `student_id`='$student_id' AND sender='admin'");
              $data1 = mysqli_fetch_array($query);
              echo "<span class='label label-primary'>" .$data1[0] ."</span>";
            ?>
            </div>
            <br>
            <div>messages</div>
          </div>
        </div>
        <br>
      </div>
      <a href="dashboard.php?action=messages">
          <div class="panel-footer">
            <span class="pull-left">My Messages</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <br>
        <div class="row">
          <div class="col-xs-3">
              <i class="fa fa-envelope fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
              <div class="huge bold">Contact Admin</div>
              <div>Contact Admin</div>
          </div>
        </div>
        <br>
      </div>
      <a href="dashboard.php?action=send_message">
          <div class="panel-footer">
            <span class="pull-left">Message Admin</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
      </a>
    </div>
  </div>
</div>
