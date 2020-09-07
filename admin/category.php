<?php include('../admin_inc/header.php');?>
<?php include('../admin_inc/navbar.php');?>


<!--/. NAV TOP  -->
<div id="wrapper">
    <div class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="category.php" class="active-menu"><i class="fa fa-desktop"></i> Category</a>
                </li>
                <li>
                    <a href="makepost.php"><i class="fa fa-bar-chart-o"></i> Charts</a>
                </li>
                <li>
                    <a href="tab-panel.php"><i class="fa fa-qrcode"></i> Tabs & Panels</a>
                </li>

                <li>
                    <a href="table.php"><i class="fa fa-table"></i> Responsive Tables</a>
                </li>
                <li>
                    <a href="form.php"><i class="fa fa-edit"></i> Forms </a>
                </li>


                <li>
                    <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>

                            </ul>

                        </li>
                    </ul>
                </li>
                <li>
                    <a href="empty.php"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                </li>
            </ul>

        </div>

    </div>


    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" class="custom-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header" id="mytitles">
                        Category <small>This is your Category section</small>
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <!-- table -->
            <div class="container">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $query = "SELECT * FROM  category ORDER BY category_id";
                    $category = $db->select($query);
                        if ($category) {
                            $i = 0;
                            while ($result = $category->fetch_assoc()) {
                                $i++; ?>
                        <tr>
                            <td>
                                <?php echo $i; ?>
                            </td>
                            <td>
                                <?php echo $result['category_id']; ?>
                            </td>
                            <td>
                                <?php echo $result['name']; ?>
                            </td>
                            <th>
                                <a href="editcategory.php?id=<?php echo $result['category_id']; ?>">
                                    <i class='bx bxs-message-alt-edit'></i>
                                </a>
                            </th>
                            <th>
                                <a onclick="return confirm('Are you sure to delete ?'); "
                                    href="?cat_del_id=<?php echo $result['category_id']; ?>">
                                    <i class='bx bxs-message-alt-x'></i>
                                </a>
                            </th>
                        </tr>
                        <?php
                            }
                        } ?>
                    </tbody>
                </table>
            </div>
            <!-- end table -->
            <!-- delete data -->

            <?php

if (!isset($_GET['cat_del_id']) || $_GET['cat_del_id'] === null) {
    echo "<script>window.loction = 'category.php';</script>";
} else {
    $cat_del_id  = $_GET['cat_del_id'];
    $del = "DELETE FROM category WHERE category_id = '$cat_del_id'";
    $delete = $db->delete($del);
    if ($delete) {
        // echo "<script>window.location = 'category.php?act=success_insert';</script>";;
        echo '
    <div class="alert alert-primary text-center" role="alert">
    Category Successfully Deleted
    </div>
    ';
    } else {
    
    // echo "<script>window.location = 'category.php?act=failed_insert';</script>";;
        echo '
    <div class="alert alert-primary text-center" role="alert">
    Category Not Deleted
    </div>
    ';
    }
}
?>
            <!-- ROW -->
            <div class="container category_container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <!-- add category -->
                            <div class="panel-body">
                                <?php
                    if (isset($_POST['addcategorybtn'])) {
                        $categoryinput = $_POST['categoryinput'];
                        $categoryinput = $fm->input_validation($_POST['categoryinput']);
                        $categoryinput = mysqli_real_escape_string($db->link, $categoryinput);
                        if (empty($categoryinput)) {
                            echo '
                            <div class="alert alert-primary text-center" role="alert">
                            Filed should not be empty
                            </div>
                            ';
                        } else {
                            $query = "INSERT INTO category (name) VALUES ('$categoryinput')";
                            $cateinsert = $db->insert($query);
                            if ($cateinsert) {
                                // echo "<script>window.location = 'category.php?act=success_insert';</script>";;
                                echo '
                            <div class="alert alert-primary text-center" role="alert">
                            Category Successfully Inserted
                            </div>
                            ';
                            } else {
                            
                            // echo "<script>window.location = 'category.php?act=failed_insert';</script>";;
                                echo '
                            <div class="alert alert-primary text-center" role="alert">
                            Category Not Inserted
                            </div>
                            ';
                            }
                        }
                    }
                    ?>


                                <!-- Material input -->
                                <div class="md-form form-group mt-5">
                                    <form action="category.php" method="post">
                                        <!-- Material input -->
                                        <div class="md-form form-group mt-5">
                                            <input type="text" class="form-control" name="categoryinput"
                                                id="formGroupExampleInputMD" placeholder="Type Your Category">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="addcategorybtn" class="btn btn-primary">
                                                Submit
                                            </button>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Progress Bars
                            </div>
                            <div class="panel-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->
            <?php include('../admin_inc/footer.php'); ?>
            <script src="assets/js/jquery-1.10.2.js"></script>

            <script src="assets/js/bootstrap.min.js"></script>

            <script src="assets/js/jquery.metisMenu.js"></script>

            <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
            <script src="assets/js/morris/morris.js"></script>


            <script src="assets/js/easypiechart.js"></script>
            <script src="assets/js/easypiechart-data.js"></script>

            <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>

            <script src="assets/js/custom-scripts.js"></script>
            <!-- /. ROW  -->