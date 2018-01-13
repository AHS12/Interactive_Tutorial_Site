<?php require_once("../includes/database/db_connection.php"); ?>
<?php require_once("../includes/layouts/header.php"); ?>
<?php require_once("../includes/php/functions.php"); ?>
<?php require_once("../includes/php/session.php"); ?>
<?php require_once("../includes/php/validation_function.php") ?>
<?php
$usermail = "";
if (isset($_POST['submit'])) {
    $usermail = $_POST["email"];
    $password = $_POST["password"];
    $found_user = attempt_login($usermail, $password);

    if ($found_user) {
        //success
        //mark user as logged in
        $_SESSION["user_id"] = $found_user["id"];
        $_SESSION["userfname"] = $found_user["firstname"];
        $_SESSION["userlname"] = $found_user["lastname"];
        $_SESSION["usermail"] = $found_user["email"];
        $_SESSION["userpass"] = $found_user["password"];
        $_SESSION["userpicture"] = $found_user["picture"];
        $_SESSION["userinstitute"] = $found_user["institution"];
        $_SESSION["userbio"] = $found_user["bio"];
        redirect_to("index.php");
    } else {
        $_SESSION["err_login"] = 1;
        redirect_to("login.php");

    }
} else {

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
                        <?php //echo message();
                        //                        echo form_errors($errors);


                        if (isset($_SESSION["err_login"])) {
                            echo "<h2 id=\"message\" class=\"text-center alert alert-danger\"><strong>Email Or Password Error!</strong></h2>";
                        }
                        session_unset();
                        ?>
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

            </div>
        </div>
    </section>
</div>
</body>
</html>