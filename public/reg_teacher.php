<?php
@ob_start();
if (session_status() != PHP_SESSION_ACTIVE) session_start();
?>

<?php require_once "../includes/layouts/header.php" ?>

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
                    <form action="../includes/php/register.php" autocomplete="on" method="post"
                          enctype="multipart/form-data">
                        <h1>Register</h1>

                        <?php

                        if (isset($_SESSION['wrong_pass'])) {
                            echo "<h2 id=\"message\" class=\"text-center alert alert-danger\"><strong>Password Does not Match</strong></h2>";
                        }

                        if (isset($_SESSION['no_image'])) {
                            echo "<h2 id=\"message\" class=\"text-center alert alert-danger\"><strong>Please Upload image</strong></h2>";
                        }

                        if (isset($_SESSION['wrong_image_formate'])) {
                            echo "<h2 id=\"message\" class=\"text-center alert alert-danger\"><strong>Please Upload PNG,JPG,GIF Formate Picture</strong></h2>";
                        }

                        session_unset();
                        ?>

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
                            <input id="username" name="email" required="required" type="email"
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

                            <!--    for preview Image-->

                            <script type="text/javascript">
                                function readURL(input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();

                                        reader.onload = function (e) {
                                            $('#preview').attr('src', e.target.result);
                                        };

                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                            </script>

                            <input type="file" name="image" onchange="readURL(this)"> <br>
                            <img width="240" height="240" id="preview" src="#" alt=""> <br>

                        </p>


                        <p class="signin button">
                            <input type="submit" id="submit" name="register_teacher" value="Register"/>
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