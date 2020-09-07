<?php include('../admin_inc/header.php');?>
<?php include('../admin_inc/navbar.php');?>
<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="category.php"><i class="fa fa-desktop"></i> Category</a>
            </li>
            <li>
                <a href="makepost.php" class="active-menu"><i class="fa fa-bar-chart-o"></i> Charts</a>
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
</nav>
<!-- /. NAV SIDE  -->
<!-- form posting -->
<div id="page-wrapper">

    <div class="block-title">
        <h1 id="mytitles">Enter your text here..</h1>
    </div>
    <?php
        $make_post_cat ='';
        $make_post_title = '';
        $make_post_textarea = '';
        $make_post_author = '';
        
    ?>
    <?php
        if (isset($_POST['make_post_btn'])) {
            $make_post_cat = mysqli_real_escape_string($db->link, $_POST['make_post_cat']);
            $make_post_title = mysqli_real_escape_string($db->link, $_POST['make_post_title']);
            $make_post_textarea = mysqli_real_escape_string($db->link, $_POST['make_post_textarea']);
            $make_post_author = mysqli_real_escape_string($db->link, $_POST['make_post_author']);
            // upload image
            $extensions= array("jpeg","jpg","png");
            $file_name = $_FILES['make_post_file']['name'];
            $file_size = $_FILES['make_post_file']['size'];
            $file_tmp = $_FILES['make_post_file']['tmp_name'];
            $file_type = $_FILES['make_post_file']['type'];
            $file_name_array=explode('.', $_FILES['make_post_file']['name']);
            $file_ext = strtolower(end($file_name_array));
            
            if ($make_post_cat === ""
            ||  $make_post_title === ""
            ||  $make_post_textarea === ""
            ||  $make_post_author === ""
            ||  $file_name === "") {
                echo '
                <div class="alert alert-primary text-center" role="alert">
                    Fill all the forms
                </div>
                ';
            } elseif ($file_size  >1048567) {
                echo '
                <div class="alert alert-primary text-center" role="alert">
                    Image size should be 1MB
                </div>
                ';
            } elseif (in_array($file_ext, $extensions)=== false) {
                echo '
                <div class="alert alert-primary text-center" role="alert">
                You can upload only
                </div>';
            } else {
                move_uploaded_file($file_tmp, "../images/".$file_name);
                $query = "INSERT INTO post(category_id, title, body, author, images) 
                 VALUES('$make_post_cat','$make_post_title','$make_post_textarea','$make_post_author','$file_name')";
                $inserted_rows = $db->insert($query);
                if ($inserted_rows) {
                    echo '
                    <div class="alert alert-primary text-center" role="alert">
                    Post Successfully Inserted
                       </div>
                       ';
                } else {
                    echo '<div class="alert alert-primary text-center" role="alert">
                    Post Not Inserted</div>';
                }
            }
        }
    ?>
    <form action="makepost.php" method="POST" enctype="multipart/form-data">
        <!-- choose categor -->
        <div class="form-group">
            <select class="form-control" name="make_post_cat">
                <option>Select Your Category</option>
                <?php $query = "SELECT * FROM category";
                    $category = $db->select($query);
                    if ($category) {
                        while ($result =$category->fetch_assoc()) { ?>

                <option value="<?php echo $result['category_id']; ?>"><?php echo $result['name']; ?></option>
                <?php }
                    }?>
            </select>
        </div>
        <!-- title -->
        <div class="form-group">
            <input type="text" id="title" name="make_post_title" value="<?php echo $make_post_title ?>"
                class="form-control" placeholder="What is the title ?">
        </div>

        <!-- this is the body text -->
        <div class="form-group">
            <textarea id="tiny" name="make_post_textarea" value="<?php echo $make_post_textarea;?>"
                placeholder="Type Your Thought"></textarea>
        </div>

        <!-- this is the author name -->
        <div class="form-group">
            <input type="text" id="make_post_author" value="<?php echo $make_post_author; ?>" name="make_post_author"
                class="form-control" placeholder="What is the author name ?">
        </div>

        <!-- this is the image -->
        <div class="form-group">
            <input type="file" name="make_post_file">
        </div>
        <hr>
        <!-- this is the submit button -->
        <button type="submit" class="btn btn-primary" name="make_post_btn">Submit</button>
        <a href="index.php" class="btn btn-dark">
            Back
        </a>
    </form>


    <script>
    tinymce.init({
        selector: 'textarea#tiny',
        plugins: "paste",
        paste_as_text: true
        //other options
    });
    </script>






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