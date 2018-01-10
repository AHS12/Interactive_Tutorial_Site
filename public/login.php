<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    <title>Login and Registration Form with HTML5 and CSS3</title>
    <link rel="stylesheet" type="text/css" href="../lib/font-awesome.min.css"/>
    <link rel="stylesheet" href="../lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/main.css">


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
                <li><a href="index.php#join_pannel">REGISTER</a></li>
            </ul>
        </div>
    </div>

</nav>
<br>
<!-- ********** navbar end ************* -->
<div class="container">

    <header>
        <marquee width="50%">
            <h1>Login</h1>
        </marquee>

    </header>
    <section>
        <div id="container_demo">
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form action="mysuperscript.php" autocomplete="on">
                        <h1>Log in</h1>
                        <p>
                            <label for="username" class="uname"> Your email or username </label>
                            <input id="username" name="username" required="required" type="text"
                                   placeholder="myusername or mymail@mail.com"/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd"> Your password </label>
                            <input id="password" name="password" required="required" type="password"
                                   placeholder="eg. X8df!90EO"/>
                        </p>
                        <p class="keeplogin">
                            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping"/>
                            <label for="loginkeeping">Keep me logged in</label>
                        </p>
                        <!--  <p class="login button">
                             <a href="http://cookingfoodsworld.blogspot.in/" target="_blank" ></a>
                          </p>
                      -->

                        <p class="signin button">
                            <input type="submit" value="Log in"/>
                        </p>


                        <p class="change_link">
                            Not a member yet ?
                            <a href="index.php#join_pannel" class="to_register">Join us</a>
                        </p>
                    </form>
                </div>

                <!--                <div id="register" class="animate form">-->
                <!--                    <form action="mysuperscript.php" autocomplete="on">-->
                <!--                        <h1> Sign up </h1>-->
                <!--                        <p>-->
                <!--                            <label for="usernamesignup" class="uname">Your username</label>-->
                <!--                            <input id="usernamesignup" name="usernamesignup" required="required" type="text"-->
                <!--                                   placeholder="mysuperusername690"/>-->
                <!--                        </p>-->
                <!--                        <p>-->
                <!--                            <label for="emailsignup" class="youmail"> Your email</label>-->
                <!--                            <input id="emailsignup" name="emailsignup" required="required" type="email"-->
                <!--                                   placeholder="mysupermail@mail.com"/>-->
                <!--                        </p>-->
                <!--                        <p>-->
                <!--                            <label for="passwordsignup" class="youpasswd">Your password </label>-->
                <!--                            <input id="passwordsignup" name="passwordsignup" required="required" type="password"-->
                <!--                                   placeholder="eg. X8df!90EO"/>-->
                <!--                        </p>-->
                <!--                        <p>-->
                <!--                            <label for="passwordsignup_confirm" class="youpasswd">Please confirm your password </label>-->
                <!--                            <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required"-->
                <!--                                   type="password" placeholder="eg. X8df!90EO"/>-->
                <!--                        </p>-->
                <!--                        <p class="signin button">-->
                <!--                            <input type="submit" value="Sign up"/>-->
                <!--                        </p>-->
                <!--                        <p class="change_link">-->
                <!--                            Already a member ?-->
                <!--                            <a href="#tologin" class="to_register"> Go and log in </a>-->
                <!--                        </p>-->
                <!--                    </form>-->
                <!--                </div>-->

            </div>
        </div>
    </section>
</div>
</body>
</html>