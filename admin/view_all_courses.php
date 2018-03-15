<?php require_once ("../includes/database/db_connection.php");?>
<?php require_once ("../includes/php/session.php");?>
<?php require_once ("../includes/php/functions.php");?>
<?php require_once ("../admin/layouts/admin_header.php");?>


    <div id="wrapper">

    <!-- Navigation -->

    <?php require_once("../admin/layouts/admin_navigation.php");?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">


                    <h1 class="page-header">
                        Manage the Courses
                    </h1>


                    <table class="table table-responsive table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Content Title</th>
                            <th>Instructor Name</th>
                            <th>Category</th>
                            <th>picture</th>
                            <th>Level</th>
                            <th>Date</th>
                            <th>Tags</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $query = "SELECT * FROM content WHERE visibility = 1";
                        $select_all_content = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($select_all_content)) {
                            $content_id = $row['content_id'];
                            $user_id = $row['user_id'];
                            $content_title = $row['content_title'];
                            $content_picture = $row['content_picture'];
                            $content_date = $row['content_date'];
                            $content_level = $row['content_level'];
                            $content_category = $row['content_category'];
                            $content_tags = $row['content_tags'];

                            $user = mysqli_fetch_assoc(find_selected_user_by_id($user_id));
                            $user_firstname = $user['firstname'];
                            $user_lastname = $user['lastname'];

                        ?>
                            <tr>
                                <td><?php echo $content_id; ?></td>
                                <td><?php echo $content_title; ?></td>
                                <td><?php echo $user_firstname." ".$user_lastname; ?></td>
                                <td><?php echo $content_category; ?></td>
                                <td><img width="100" src="../images/<?php echo $content_picture; ?>" alt="image"></td>
                                <td><?php echo $content_level; ?></td>
                                <td><?php echo $content_date; ?></td>
                                <td><?php echo $content_tags; ?></td>
                                <td><a class="btn btn-primary" href="#">Edit</a></td>
                                <td><a class="btn btn-danger" href="#">Delete</a></td>
                            </tr>

                        <?php
                        }
                        ?>

                        </tbody>
                    </table>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

<?php require_once("../admin/layouts/admin_footer.php");?>