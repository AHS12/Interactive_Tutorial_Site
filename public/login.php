<?php require_once("../includes/database/db_connection.php");?>
<?php require_once("../includes/layouts/header.php"); ?>
<?php require_once("../includes/php/functions.php"); ?>
<?php require_once("../includes/php/session.php"); ?>
<?php
    $usermail = "";
    if(isset($_POST['submit'])){
        $usermail = $_POST["email"];
        $password = $_POST["password"];
        $found_usermail = attempt_login($usermail,$password);

        if($found_usermail){
            //success
            //mark user as logged in
            $_SESSION["user_id"]=$found_usermail["id"];
            $_SESSION["username"]=$found_usermail["firstname"];
            redirect_to("index.php");
        }
        else{
            $_SESSION["message"] = "Username/password not found";

        }
    }
    else{

    }
?>
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

                    <form action="login.php" autocomplete="on" method="post">
                        <h1>Log in</h1>
                        <p>
                            <label for="email" class="uname"> Your email </label>
                            <input id="username" name="email" required="required" type="text"
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
                            <input type="submit" name="submit" value="Log in"/>
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