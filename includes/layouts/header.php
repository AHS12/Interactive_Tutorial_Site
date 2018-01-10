<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    <title>Login and Registration Form with HTML5 and CSS3</title>
    <link rel="stylesheet" type="text/css" href="../lib/font-awesome.min.css"/>
    <link rel="stylesheet" href="../lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <link rel="stylesheet" type="text/css" href="../style/profile.css">


</head>
<body>
<!-- ********** navbar start ************* -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header navbar-left">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sheko</a>
        </div>
        <div class="collapse navbar-collapse" id="site-menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">HOME</a></li>
                <li><a href="tutorial.html">TUTORIAL</a></li>
                <li><a href="#skills">SKILLS</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#portfolio">PORTFOLIO</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <?php if(isset($_SESSION['userfname'])){?>
                    <li><a href="profile.php"><?php echo htmlentities($_SESSION["userfname"]); ?></a></li>
                <?php }else{?>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="#join_pannel">REGISTER</a></li>
                <?php }?>

            </ul>
        </div>
    </div>

</nav>