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

<!--                    --><?php
//                    if(isset($_POST['submit'])){
//
//
//
//                        $required_fields = array("cat_title");
//                        validate_presences($required_fields);
//
//                        if(empty($errors)) {
//
//                            $cattitle = $_POST['cat_title'];
//                            $cattitle = mysqli_escape_string($connection,$cattitle);
//
//                            $query = "INSERT INTO categories(cat_title) ";
//                            $query .= "VALUES ('$cattitle')";
//
//                            $create_category_query = mysqli_query($connection, $query);
//
//                            if (!$create_category_query) {
//                                die('query failed' . mysqli_error($connection));
//                            }
//                        }
//
//
//
//                    }
//                    ?>

                    <h1 class="page-header">
                        Manage the Categories
                    </h1>

                    <div class="col-xs-6">


                        <form action="categories.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="cat_title">Add Category</label>
                                <input class="form-control" type="text" name="cat_title" title="Entercategory"/>
                            </div>
                            <div class="form-group">

                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category"/>
                            </div>
                        </form>

                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="cat_title">Edit Category</label>

                                <!--                                --><?php
                                //                                if(isset($_GET['edit'])){
                                //
                                //                                    $cat_id = $_GET['edit'];
                                //
                                //                                    $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
                                //                                    $select_categories_id = mysqli_query($connection, $query);
                                //
                                //                                    while($row = mysqli_fetch_assoc($select_categories_id)){
                                //                                        $cat_id = $row['cat_id'];
                                //                                        $cat_title = $row['cat_title'];
                                //                                    }
                                //                                }
                                //
                                //
                                //                                ?>



                                <input class="form-control" type="text" name="cat_title" title="Entercategory"/>
                            </div>
                            <div class="form-group">

                                <input class="btn btn-primary" type="submit" name="edit" value="Update Category"/>
                            </div>
                        </form>
                    </div>
                    <!--                    add category form-->
                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Title</th>
                            </tr>
                            </thead>
                            <tbody>
<!--                            --><?php
//                            $query = "SELECT * FROM categories";
//                            $select_categories = mysqli_query($connection, $query);
//                            while ($row = mysqli_fetch_assoc($select_categories)){
//                                $cat_id = $row['cat_id'];
//                                $cat_title = $row['cat_title'];
//                                echo "<tr>";
//                                echo "<td>{$cat_id}</td>";
//                                echo "<td>{$cat_title}</td>";
//                                echo "<td><a href='delete_category.php?delete={$cat_id}'>Delete</a> </td>";
//                                echo "<td><a href='edit_category.php?edit={$cat_id}'>Edit</a> </td>";
//                                echo "</tr>";
//
//                            }
//                            ?>



                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

<?php require_once("../admin/layouts/admin_footer.php");?>