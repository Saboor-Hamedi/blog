<?php include('../admin_inc/header.php');?>
<?php include('../admin_inc/navbar.php');?>
<?php
$id = 0; 
if(!isset($_GET['id']) || $_GET['id'] === NULL)  {
    // echo "<script>window.location ='category.php';</script>";
}else{
    $id = $_GET['id']; 

}
?>

<?php
    if(isset($_POST['edit_category_btn'])){
        $edit_category_input = $_POST['edit_category_input'];
        $edit_category_input = $fm->input_validation($_POST['edit_category_input']);
        $edit_category_input = mysqli_real_escape_string($db->link, $edit_category_input);
        if(empty($edit_category_input)){
            echo '
            <div class="alert alert-primary text-center" role="alert">
            Filed should not be empty
            </div>
            ';
    }else{
        $id = $_POST['id'];
        $query = "UPDATE `category` SET `email` = '".$edit_category_input."' WHERE `id` = $id";
        $cateinsert = $db->update($query);
        if($cateinsert){
            echo '
            <div class="alert alert-primary text-center" role="alert">
                Category Successfully Inserted
            </div>
            ';
        }else{
            echo '
            <div class="alert alert-primary text-center" role="alert">
            Category Not Inserted
            </div>
            ';  
        }
    }
    }
    ?>
<?php var_dump($id);?>
    <!-- ================ -->


<div class="update">
<form action="editcategory.php" method="post">
    <input type="text" value="" name="edit_category_input" placeholder="Update Category">
    <button type="submit" name="edit_category_btn" class="btn btn-primary">Update</button>
</form>

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