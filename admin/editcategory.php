<?php include ('../admin_inc/header.php'); ?>
<?php include ('../admin_inc/navbar.php'); ?>

<?php
//update
$stat_update='';
if(@$_GET['act']=='save'){
	//print_r($_POST);die;
}
if (isset($_POST['category_update_btn']))
{
	$id=@$_POST['cat_id'];
    $category_update_input = $_POST['category_update_input'];
    $category_update_input = $fm->input_validation($_POST['category_update_input']);
    $category_update_input = mysqli_real_escape_string($db->link, $category_update_input);
    if (empty($category_update_input))
    {
		echo "<script>window.location = 'category.php?act=failed_update';</script>";exit;
        $stat_update ='
                            <div class="alert alert-primary text-center" role="alert">
                            Filed should not be empty
                            </div>
                            ';
    }
    elseif($id)
    {
        $query = "UPDATE `category` SET name='$category_update_input' WHERE `category_id` = '$id' limit 1";
        $cateinsert = $db->update($query);
        if ($cateinsert)
        {
            
			echo "<script>window.location = 'category.php?act=success_update';</script>";exit;
        }
        else
        {
            
			echo "<script>window.location = 'category.php?act=failed_update';</script>";exit;
        }
    }else{
		$query ="insert into category(name) values('$category_update_input'";
		$id_new = $db->insert($query);
		echo "<script>window.location = 'category.php?act=success_update&id={$id_new}';</script>";exit;
	}
}
$id = 0;
if (!isset($_GET['id']) || $_GET['id'] === NULL)
{
    // echo "<script>window.location = 'category.php';</script>";
    
}
else
{

    $id = $_GET['id'];
}

?>
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
                    <a href="chart.php"><i class="fa fa-bar-chart-o"></i> Charts</a>
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
                    <h1 class="page-header">
                        Category <small>This is your Category section</small>
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->

            <!-- table -->
            <div class="container">
<!-- Material input -->
<?php 
if($id){
	$query = "SELECT * FROM `category` WHERE `category_id` = '$id' ORDER BY `category_id`";
	$category = $db->select($query);
	if(!$category){
		?><!--div class="md-form form-group mt-5">NO CATEGORY id:<?=$id;?></div--><?php 
	}else{ 
		while ($result = $category->fetch_assoc())
		{
	?>
		<div class="md-form form-group mt-5">
			<form action="editcategory.php?act=save" method="post">
				<!-- Material input -->
				<input type='hidden' value='<?=$id;?>' name='cat_id' />
				<div class="md-form form-group mt-5">
					Category
					<input type="text" value="<?php echo $result['name']; ?>"
						class="form-control" name="category_update_input"
						id="formGroupExampleInputMD" placeholder="Type Your Category">
				</div>
				<div class="form-group">
					<button type="submit" name="category_update_btn" class="btn btn-primary" value='save'>
						Update
					</button>
				</div>
			</form>
		</div>
<?php
		} 
	}

}

if(false){
?>
		
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
if ($category)
{
    $i = 0;
    while ($result = $category->fetch_assoc())
    {
        $i++;
?>
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
                                    href="deletecategory.php?cat_del_id=<?php echo $result['category_id']; ?>">
                                    <i class='bx bxs-message-alt-x'></i>
                                </a>
                            </th>
                        </tr>
                        <?php
    }
} ?>
                    </tbody>
                </table>
<?php
}
?>
            </div>
            <!-- end table -->

            <!-- ROW -->


            <div class="container category_container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <!-- add category -->
                            <div class="panel-body">
                                <?=$stat_update;?>



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
            <?php include ('../admin_inc/footer.php'); ?>
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
