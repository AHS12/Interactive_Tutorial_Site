<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Register</title>
    <link rel="stylesheet" type="text/css"
          href="../lib/font-awesome.min.css"/>
    <link rel="stylesheet" href="../lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/main.css">

</head>
<body>


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
                <li><a href="#contact">CONTACT</a></li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>

        </div>
    </div>

</nav>

<header>
    <marquee width="50%">
        <h1>Login and Registration</h1>
    </marquee>

</header>

<section>


    <div id="register" class="animate form">
        <form action="mysuperscript.php" autocomplete="on">
            <h1> Sign up </h1>
            <p>
                <label for="usernamesignup" class="uname">Your username</label>
                <input id="usernamesignup" name="usernamesignup" required="required" type="text"
                       placeholder="mysuperusername690"/>
            </p>
            <p>
                <label for="emailsignup" class="youmail"> Your email</label>
                <input id="emailsignup" name="emailsignup" required="required" type="email"
                       placeholder="mysupermail@mail.com"/>
            </p>
            <p>
                <label for="passwordsignup" class="youpasswd">Your password </label>
                <input id="passwordsignup" name="passwordsignup" required="required" type="password"
                       placeholder="eg. X8df!90EO"/>
            </p>
            <p>
                <label for="passwordsignup_confirm" class="youpasswd">Please confirm your password </label>
                <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required"
                       type="password" placeholder="eg. X8df!90EO"/>
            </p>
            <p class="signin button">
                <input type="submit" value="Sign up"/>
            </p>
            <p class="change_link">
                Already a member ?
                <a href="#tologin" class="to_register"> Go and log in </a>
            </p>
        </form>
    </div>

</section>

</body>
</html>