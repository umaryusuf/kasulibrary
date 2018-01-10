<div class="row">
  <div class="col-md-12">
    <header class="well well-sm">
      <h2 class="text-center">Welcome to Admin Panel KASU E-Library</h2>
    </header>
  </div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-green">
      <div class="panel-heading">
        <br>
        <div class="row">
          <div class="col-xs-3">
              <i class="fa fa-book fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge bold">We have 
						<?php  
                $query = mysqli_query($dbc, "SELECT COUNT(`book_id`) FROM `books`");
                $data1 = mysqli_fetch_array($query);
                echo "<span class='label label-primary'>" .$data1[0] ."</span>";
              ?>
            </div>
            <br>
            <div>
            	<h4><strong>Books</strong></h4>
            </div>
          </div>
        </div>
        <br>
      </div>
      <a href="admin.php?action=books">
        <div class="panel-footer">
          <span class="pull-left">View all books</span>
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
              <i class="fa fa-file fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge bold">We have 
						<?php  
                $query = mysqli_query($dbc, "SELECT COUNT(`course_id`) FROM `courses`");
                $data1 = mysqli_fetch_array($query);
                echo "<span class='label label-primary'>" .$data1[0] ."</span>";
              ?>
            </div>
            <br>
            <div>
            	<h4><strong>Courses</strong></h4>
            </div>
          </div>
        </div>
        <br>
      </div>
      <a href="admin.php?action=courses">
          <div class="panel-footer">
            <span class="pull-left">View all Courses</span>
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
              <i class="fa fa-users fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
              <div class="huge bold">We have 
							<?php  
                $query = mysqli_query($dbc, "SELECT COUNT(`student_id`) FROM `students`");
                $data3 = mysqli_fetch_array($query);
                echo "<span class='label label-primary'>" .$data3[0] ."</span>";
              ?>
              </div>
              <br>
              <div>
              	<h4><strong>Students</strong></h4>
              </div>
          </div>
        </div>
        <br>
      </div>
      <a href="admin.php?action=students">
          <div class="panel-footer">
            <span class="pull-left">View all students</span>
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
            <div class="huge bold">We have 
						<?php  
              $query = mysqli_query($dbc, "SELECT COUNT(`viewed_id`) FROM `viewed_books`");
              $data1 = mysqli_fetch_array($query);
              echo "<span class='label label-primary'>" .$data1[0] ."</span>";
            ?>
            </div>
            <br>
            <div>
            	<h4><strong>Books read by students</strong></h4>
            </div>
          </div>
        </div>
        <br>
      </div>
      <a href="admin.php?action=books_read">
          <div class="panel-footer">
            <span class="pull-left">View all read books</span>
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
              <i class="fa fa-envelope-o fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
              <div class="huge bold">You have 
							<?php  
                $query = mysqli_query($dbc, "SELECT COUNT(`msg_id`) FROM `msgs` WHERE sender!='admin'");
                $data1 = mysqli_fetch_array($query);
                echo "<span class='label label-primary'>" .$data1[0] ."</span>";
              ?>
              </div>
              <br>
              <div>
              	<h4><strong>Message from students</strong></h4>
              </div>
          </div>
        </div>
        <br>
      </div>
      <a href="admin.php?action=messages">
          <div class="panel-footer">
            <span class="pull-left">View all messages</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
      </a>
  	</div>
	</div>
  <div class="col-md-4">
    <div class="panel panel-green">
      <div class="panel-heading">
        <br>
        <div class="row">
          <div class="col-xs-3">
              <i class="fa fa-comment fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge bold">We have 
            <?php  
                $query = mysqli_query($dbc, "SELECT COUNT(`msg_id`) FROM `msgs` WHERE sender!='admin' AND viewed='0'");
                $data1 = mysqli_fetch_array($query);
                echo "<span class='label label-primary'>" .$data1[0] ."</span>";
              ?>
            </div>
            <br>
            <div>
              <h4><strong>New message(s)</strong></h4>
            </div>
          </div>
        </div>
        <br>
      </div>
      <a href="admin.php?action=new_messages">
        <div class="panel-footer">
          <span class="pull-left">View new messages</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
</div>