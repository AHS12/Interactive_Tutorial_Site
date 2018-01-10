<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Register</title>
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

<br>
<div class="container">

    <header>
        <marquee width="50%">
            <h1>Registra As instructor</h1>
        </marquee>

    </header>
    <section>
        <div id="container_demo">
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <!--<a class="hiddenanchor" id="toregister"></a>-->
            <!--<a class="hiddenanchor" id="tologin"></a>-->
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form action="../includes/php/register.php" autocomplete="on">
                        <h1>Register</h1>

                        <p>
                            <label for="firstname" class="uname"> First Name</label>
                            <input id="firstname" name="firstname" required="required" type="text"
                                   placeholder="abc"/>
                        </p>


                        <p>
                            <label for="lastname" class="uname"> Last Name</label>
                            <input id="lastname" name="lastname" required="required" type="text"
                                   placeholder="xyz"/>
                        </p>


                        <p>
                            <label for="institution" class="uname"> Your institution</label>
                            <input id="institution" name="institution" required="required" type="text"
                                   placeholder="eg. IIUC"/>
                        </p>


                        <p>
                            <label for="username" class="uname"> Your email</label>
                            <input id="username" name="username" required="required" type="text"
                                   placeholder="mymail@mail.com"/>
                        </p>


                        <!--<script>-->
                            <!--$('#password, #confirm_password').on('keyup', function () {-->
                                <!--if ($('#password').val() === $('#confirm_password').val()) {-->
                                    <!--$('#message').html('Password Matched').css('color', 'green');-->
                                <!--} else-->
                                    <!--$('#message').html('incorrect Password').css('color', 'red');-->
                                <!--$('#submit').disable();-->
                            <!--});-->
                        <!--</script>-->

                        <p>
                            <label for="password" class="youpasswd"> Your password </label>
                            <input id="password" name="password" required="required" type="password"
                                   placeholder="eg. X8df!90EO"/>
                        </p>

                        <p>
                            <label for="confirm_password" class="youpasswd"> Confirm password </label>
                            <input id="confirm_password" name="confirm_pass" required="required" type="password"
                            />

                        </p>

                        <p>
                            <span id="message" class="text-center help-block"></span>
                        </p>


                        <p class="signin button">
                            <input type="submit" id="submit" value="Register"/>
                        </p>


                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


<script src="../lib/jquery-3.2.1.min.js"></script>
</body>
</html>