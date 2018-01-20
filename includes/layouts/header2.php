<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Card</title>
  <link rel="stylesheet" href="../lib/bootstrap.min.css">
  <link rel="stylesheet" href="../lib/fontAwesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
<body>
<!-- ********** navbar ************* -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header navbar-left">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-menu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Sheko</a>
    </div>
    <div class="collapse navbar-collapse" id="site-menu">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="cards.php">COURSES</a></li>
          <li><a href="forum.php">FORUM</a></li>
          <li><a href="#contact">CONTACT</a></li>
          <?php
          $userrole = "";
          if(isset($_SESSION['userrole'])) {
              $userrole = $_SESSION['userrole'];

          }?>
          <?php if((($userrole=="T") && isset($_SESSION['userfname']))){?>
              <!--                    <li><a href="profile.php">--><?php //echo htmlentities($_SESSION["userfname"]); ?><!--</a></li>-->
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"> </i><?php echo " ". htmlentities($_SESSION["userfname"]);?><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li>
                          <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                      </li >
                      <li>
                          <a href="create_course_landing.php"><i class="fa fa-fw fa-edit"></i> Create Course</a>
                      </li>
                      <li>
                          <a href="profile.php#profile_tab#settings"><i class="fa fa-fw fa-gear"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="../includes/php/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                      </li>
                  </ul>
              </li>
          <?php }else if(isset($_SESSION['userfname'])){ ?>

              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"> </i><?php echo " ". htmlentities($_SESSION["userfname"]);?><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li>
                          <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                      </li>

                      <li>
                          <a href="profile.php#profile_tab#settings"><i class="fa fa-fw fa-gear"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="../includes/php/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                      </li>
                  </ul>
              </li>

          <?php }else{?>
              <li><a href="login.php">LOGIN</a></li>

              <li><a href="index.php#join_pannel">REGISTER</a></li>
          <?php }?>

      </ul>
    </div>
  </div>

</nav>
