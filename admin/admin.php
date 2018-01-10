<?php
session_start();
//error_reporting(0);
require_once '../connect.php';

if(!$_SESSION["admin"]){
  header("Location: index.php");
}

function check_input($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | KASU E-Library</title>
    <link rel="shortcut icon" href="../logo.PNG">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
</head>
  <body>
    <nav class="navbar  navbar-default navbar-fixed-top" >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand fa fa-outdent" id="menu-toggle"></a>
          <a class="navbar-brand" href="admin.php">KASU E-Library</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="<?php echo !$_GET['action'] ? 'active' : '' ?>"><a href="admin.php">Dashboard</a></li>
            <li class="<?php echo $_GET['action'] == 'books' ? 'active' : '' ?>"><a href="admin.php?action=books">Books</a></li>
            <li class="<?php echo $_GET['action'] == 'courses' ? 'active' : '' ?>"><a href="admin.php?action=courses">Courses</a></li>
            <li class="<?php echo $_GET['action'] == 'students' ? 'active' : '' ?>"><a href="admin.php?action=students">Students</a></li>
            <form class="navbar-form navbar-left" role="search"  action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="search" value="<?php if(isset($_GET['q'])) echo $_GET['q']; ?>" name="q" required>
							</div>
							<button type="submit" class="btn btn-default">Search</button>
						</form>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="<?php echo $_GET['action'] == 'messages' ? 'active' : '' ?>">
              <a href="admin.php?action=messages">
                 Messages <i class="fa fa-envelope-o fa-fw"></i>
              </a>
            </li>
          	<li><a href="logout.php">logout</a></li>
          </ul>
        </div>
      </div>
	  </nav>
    <!-- end navbar -->
    <main id="wrapper" class="menuDisplayed">
      <!--sidebar-->
      <div id="sidebar-wrapper">
        <div class="sidebar-header">
          <div class="row">
            <div class="col-xs-12 text-center">
              <h3 style="color: #fcfcfc;"> <?php echo ucfirst($_SESSION['admin']); ?></h3>
            </div>
          </div>
        </div>
        <ul id="sidebar-nav" >
          <li>
            <a href="admin.php">
              <i class="icons fa fa-dashboard fa-fw"></i> Dashboard
            </a>
          </li>
          <li>
            <a href="admin.php?action=change_password">
              <i class="icons fa fa-lock fa-fw"></i> Change password
            </a>
          </li>
          <li>
            <a href="admin.php?action=books">
              <i class="icons fa fa-book fa-fw"></i> Books
            </a>
          </li>
          <li>
            <a href="admin.php?action=courses">
              <i class="icons fa fa-file-o fa-fw"></i> Courses
            </a>
          </li>
          <li>
            <a href="admin.php?action=students">
              <i class="icons fa fa-users fa-fw"></i> Students
            </a>
          </li>
          <li>
            <a href="admin.php?action=messages">
              <i class="icons fa fa-envelope-o fa-fw"></i> Messages
            </a>
          </li>
          <li>
            <a href="logout.php"><i class="icons fa fa-sign-out fa-fw"></i> Logout</a>
          </li>
        </ul>
      </div>

      <!--content-->
      <section id="page-content-wrapper">
        <div class="container-fliud">

          <?php
            if (isset($_GET["q"])) {
              require_once 'search.php';
            } elseif (isset($_GET["action"])) {

              switch ($_GET['action']) {
                case 'view_profile':
                  require_once 'includes/view_profile.php';
                  break;
                case 'change_password':
                  require_once 'includes/change_password.php';
                  break;
                case 'books':
                  require_once 'includes/books.php';
                  break;
                case 'add_book':
                  require_once 'includes/add_book.php';
                  break;
                case 'book_info':
                  require_once 'includes/book_info.php';
                  break;
                case 'read_book':
                  require_once 'includes/read_book.php';
                  break;
                case 'update_book':
                  require_once 'includes/update_book.php';
                  break;
                case 'courses':
                  require_once 'includes/courses.php';
                  break;
                case 'add_course':
                  require_once 'includes/add_course.php';
                  break;
                case 'update_course':
                  require_once 'includes/update_course.php';
                  break;
                case 'view_course_pdf':
                  require_once 'includes/view_course_pdf.php';
                  break;
                case 'students':
                  require_once 'includes/students.php';
                  break;
                case 'books_read':
                  require_once 'includes/books_read.php';
                  break;
                case 'search':
                  require_once 'search.php';
                  break;              
                case 'messages':
                  require_once 'includes/messages.php';
                  break;
                case 'new_messages':
                  require_once 'includes/new_msg.php';
                  break;
                case 'viewed_msg':
                  require_once 'includes/viewed_msg.php';
                  break;
                case 'read_reply':
                  require_once 'includes/read_reply.php';
                  break;
                default:
                  require_once 'includes/admin_panel.php';
                  break;
              }

            }else{
              require_once 'includes/admin_panel.php';
            }
          ?>

        </div>
      </section>
    </main>


  	<script src="../assets/js/jquery.min.js"></script>
  	<script src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(function(){
        $('#menu-toggle').click(function(e){
         e.preventDefault();
          $('#wrapper').toggleClass('menuDisplayed');
        });
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
  </body>
</html>