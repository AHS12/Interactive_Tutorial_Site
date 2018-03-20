<?php require_once ("../includes/database/db_connection.php");?>
<?php require_once ("../includes/php/session.php");?>
<?php require_once ("../includes/php/functions.php");?>
<?php require_once ("../admin/layouts/admin_header.php");?>

<?php admin_logged_in(); ?>
    <div id="wrapper">

    <!-- Navigation -->
    <?php
    require_once "../admin/php/users_online.php";
    ?>
    <?php require_once("../admin/layouts/admin_navigation.php");?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">


                    <h1 class="page-header">
                        Manage Users
                    </h1>


                    <table class="table table-responsive table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>picture</th>
                            <th>Institution</th>
                            <th>User Role</th>
                            <th>Demonstrate</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($_GET['user_role'])){
                            $user_role = $_GET['user_role'];
                        }

                        $query = "SELECT * FROM users WHERE user_role='$user_role'";
                        $select_all_users = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($select_all_users)) {
                            $user_id = $row['id'];
                            $user_firstname = $row['firstname'];
                            $user_lastname = $row['lastname'];
                            $user_email = $row['email'];
                            $user_institution = $row['institution'];
                            $user_role = $row['user_role'];
                            $user_picture = $row['picture'];


                            ?>
                            <tr>
                                <td><?php echo $user_id; ?></td>
                                <td><?php echo $user_firstname." ".$user_lastname; ?></td>
                                <td><?php echo $user_email; ?></td>
                                <td><img width="100" src="../images/<?php echo $user_picture; ?>" alt="image"></td>
                                <td><?php echo $user_institution; ?></td>
                                <td><?php echo $user_role; ?></td>
                                <td><a class="btn btn-primary" href="#">Demonstrate</a></td>
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