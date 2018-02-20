<?php require_once("../includes/database/db_connection.php"); ?>
<?php require_once("../includes/php/session.php"); ?>
<?php require_once("../includes/php/functions.php"); ?>
<?php require_once "../includes/layouts/header2.php" ?>

<?php
teacher_logged_in();
?>
<!-- **********navbar end *********** -->

<hr style="width: 100%">
<!--<hr style="width: 100%">-->

<!-- ********** navbar ************* -->

<!-- **********navbar end *********** -->
<br><br>

<!-- **************** course content start ********-->
<!-- **************** course content start ********-->
<div class="container">
    <h1>Your Courses </h1>
    <hr>
    <div class="row fix">

        <?php
        //
        //        $current_user_id = $_SESSION['user_id'];
        //        $query_content = "SELECT content_id FROM content_enrolled WHERE user_id = '$current_user_id'";
        //        $result = mysqli_query($connection, $query_content);
        //        $content_list = mysqli_fetch_assoc($result);
        //        $row = $content_list;

        $current_user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM content WHERE visibility = 1 AND user_id = '$current_user_id' ";
        $select_all_content = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_content)) {
            $content_id = $row['content_id'];
            $user_id = $row['user_id'];
            $content_title = $row['content_title'];
            $content_picture = $row['content_picture'];
            $content_date = $row['content_date'];
            $content_category = $row['content_category'];

            $user = mysqli_fetch_assoc(find_selected_user_by_id($user_id));
            $user_firstname = $user['firstname'];
            $user_lastname = $user['lastname'];
            ?>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="../images/<?php echo $content_picture; ?>" alt="android">
                    <p style="font-weight: bold; padding-top: 10px;"><?php echo $content_title; ?></p>
                    <p class="title"
                       style="padding-left: 5px; font-size: 12px;"><?php echo "{$user_firstname} " . "{$user_lastname}"; ?></p>
                    <div style="float: right; padding-right: 5px; color: orange; padding-bottom: 5px;">
                        <i class="price-text-color fa fa-star"></i><i
                                class="price-text-color fa fa-star">
                        </i><i class="price-text-color fa fa-star"></i><i
                                class="price-text-color fa fa-star">
                        </i><i class="fa fa-star"></i>
                    </div>
                    <div class="row">
                        <a href="course_details.php?content=<?php echo urlencode($content_id) ?>"
                           class="btn btn-primary col-md-6"
                           role="button">View Course</a>
                        <a href="course_details.php?content=<?php echo urlencode($content_id) ?>"
                           class="btn btn-primary col-md-6"
                           role="button">Manage Course</a>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <?php
        }


        ?>


    </div>


</div>
<!-- **********course content end************ -->
<!-- **********course content end************ -->
<script type="text/javascript" src="js/another.js"></script>

<!-- jQuery library -->
<script src="../lib/jquery-3.2.1.min.js"></script>
<!-- Latest compiled JavaScript-->
<script src="../lib/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {

        /**
         * This object controls the nav bar. Implement the add and remove
         * action over the elements of the nav bar that we want to change.
         *
         * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
         */
        var myNavBar = {

            flagAdd: true,

            elements: [],

            init: function (elements) {
                this.elements = elements;
            },

            add: function () {
                if (this.flagAdd) {
                    for (var i = 0; i < this.elements.length; i++) {
                        document.getElementById(this.elements[i]).className += " fixed-theme";
                    }
                    this.flagAdd = false;
                }
            },

            remove: function () {
                for (var i = 0; i < this.elements.length; i++) {
                    document.getElementById(this.elements[i]).className =
                        document.getElementById(this.elements[i]).className.replace(/(?:^|\s)fixed-theme(?!\S)/g, '');
                }
                this.flagAdd = true;
            }

        };

        /**
         * Init the object. Pass the object the array of elements
         * that we want to change when the scroll goes down
         */
        myNavBar.init([
            "header",
            "header-container",
            "brand"
        ]);

        /**
         * Function that manage the direction
         * of the scroll
         */
        function offSetManager() {

            var yOffset = 0;
            var currYOffSet = window.pageYOffset;

            if (yOffset < currYOffSet) {
                myNavBar.add();
            }
            else if (currYOffSet == yOffset) {
                myNavBar.remove();
            }

        }

        /**
         * bind to the document scroll detection
         */
        window.onscroll = function (e) {
            offSetManager();
        }

        /**
         * We have to do a first detectation of offset because the page
         * could be load with scroll down set.
         */
        offSetManager();
    });

    /**
     * thumnail
     */
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });


</script>
<br>
<hr>
<div class="footer-bottom">
    <div class="container-fluid">

        <!--<hr> -->
        <div class="text-center center-block">
            <!-- <p class="txt-railway">- Bootsnipp.com -</p> -->
            <!-- <br /> -->
            <a href="https://www.facebook.com/bootsnipp"><i id="social-fb"
                                                            class="fa fa-facebook-square fa-3x social"></i></a>
            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp"
                                                                 class="fa fa-google-plus-square fa-3x social"></i></a>
            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
        <!--<hr> -->
        <div class="bottom">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                        <div class="copyright">

                            © 2017, All rights reserved

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                        <div class="design">

                            <a href="#">Cool!! </a> | <a target="_blank" href="#">Web Design & Development by Team
                                ASK</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

</body>
</html>