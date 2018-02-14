<nav class="nav-sidebar">
    <ul class="nav tabs">
        <li class="#"><a href="../public/create_course.php">Course Goal</a></li>
        <li class=""><a href="../public/create_course_curriculum.php">Curriculum</a></li>
        <li class=""><a href="../public/create_course_price_coupons.php">Price & Coupons</a></li>
    </ul>
<!--    <a href="#" class="btn btn-primary btn-lg" id="myBtn">Submit for review</a>-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <style>
        .modal-header, .close {
            background-color: #5cb85c;
            color:white !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-footer {
            background-color: #f9f9f9;
        }
    </style>
    <script >
        function myAjax() {
            $.ajax({
                type: "POST",
                url: 'create_course.php',
                data:{action:'call_this'},
                success:function(html) {
                    alert(html);
                }

            });
        }
    </script>



<!--    <a href="create_course.php?alert=true"  class="deletebtn">Delete</a>-->

<!--    --><?php
//    if(isset($_GET['alert'])) {
//        // call removeday() here
//        $show_modal = check_all_data_of_courses();
//        echo "<script> $('#myModal').modal();</script>";
//    }
//    ?>


    <a href="../includes/php/create_course_data_validation.php?content=<?php echo urlencode($content_id) ?>" class="btn btn-primary btn-group-lg" >Submit for review</a>

    <!--    <button type="button" href="create_course_title.php" class="btn btn-primary btn-group-lg" id="myBtn">Submit for review</button>-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form">
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input type="text" class="form-control" id="psw" placeholder="Enter password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="" checked>Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <p>Not a member? <a href="#">Sign Up</a></p>
                    <p>Forgot <a href="#">Password?</a></p>
                </div>
            </div>

        </div>
    </div>

    <?php

        if(isset($_SESSION['data_checking_true'])){
    ?>
            <script> $('#myModal').modal();</script>
    <?php }?>
<!--    <script>-->
<!--        $(document).ready(function(){-->
<!--            $("#myBtn").click(function(){-->
<!--                $("#myModal").modal();-->
<!--            });-->
<!--        });-->
<!--    </script>-->
</nav>