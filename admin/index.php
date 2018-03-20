<?php include "layouts/admin_header.php" ?>
<?php require_once "../includes/database/db_connection.php"?>
<?php require_once "../includes/php/session.php"?>
<?php require_once "../includes/php/functions.php"?>
<?php admin_logged_in(); ?>

<div id="wrapper">
    <?php
    $total_courses = get_number_of_courses();
    $total_instructors = get_number_of_instructors();
    $total_students = get_number_of_students();
    $total_pending_courses = get_number_of_pending_tutorials();

    require_once "../admin/php/users_online.php";

    $total_users_online = $count_user;
    ?>
    <?php require_once "layouts/admin_navigation.php" ?>


    <div id="page-wrapper">

        <div class="container-fluid">


            <!-- Page Heading -->
<!--            <div class="row">-->
<!--                <div class="col-lg-12">-->
<!--                    <h1 class="page-header">-->
<!--                        Blank Page-->
<!--                        <small>Subheading</small>-->
<!--                    </h1>-->
<!--                    <ol class="breadcrumb">-->
<!--                        <li>-->
<!--                            <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>-->
<!--                        </li>-->
<!--                        <li class="active">-->
<!--                            <i class="fa fa-file"></i> Blank Page-->
<!--                        </li>-->
<!--                    </ol>-->
<!--                </div>-->
<!--            </div>-->
            <!-- /.row -->

            <!-- /.row -->

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class='huge'><?php echo $total_courses;?></div>
                                    <div>Tutorials</div>
                                </div>
                            </div>
                        </div>
                        <a href="view_all_courses.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class='huge'><?php echo $total_instructors ?></div>
                                    <div>Instructors</div>
                                </div>
                            </div>
                        </div>
                        <a href="view_users.php?user_role=T">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class='huge'><?php echo $total_students?></div>
                                    <div> Students</div>
                                </div>
                            </div>
                        </div>
                        <a href="view_users.php?user_role=S">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class='huge'><?php echo $total_pending_courses;?></div>
                                    <div>Pending Tutorials</div>
                                </div>
                            </div>
                        </div>
                        <a href="pending_courses.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['bar']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Data', 'Count'],
                            <?php

                            $element_text = ['Tutorials','Instructor','Student','Pending Tutorials','Users Online'];
                            $element_count = [$total_courses,$total_instructors,$total_students,$total_pending_courses,$total_users_online];
                            for($i = 0; $i<5; $i++){
                                echo "['{$element_text[$i]}'" . ",". "{$element_count[$i]}],";
                            }

                            ?>

//                            ['Tutorials', 500],

                        ]);

                        var options = {
                            chart: {
                                title: '',
                                subtitle: '',
                            }
                        };

                        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                        chart.draw(data, google.charts.Bar.convertOptions(options));
                    }
                </script>
                <div id="columnchart_material" style="width: auto; height: 500px;"></div>

            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    <?php include "layouts/admin_footer.php" ?>
