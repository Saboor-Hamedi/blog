<?php  $title = 'Home'; ?>

<?php include('../inc/header.php'); ?>

<?php include('../inc/show_case.php'); ?>
<!-- cards -->


<section id="section" class="cards">
    <?php $per_page = 4; 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }
        // start every page
        $start_form = ($page-1) * $per_page;
    ?>
    <div class="column">
        <?php 
        $query = "SELECT * FROM post LIMIT $start_form, $per_page";
        $post = $db->select($query);
        if ($post) {
            while ($result = $post->fetch_assoc()) {
          
    ?>
        <div class="row">
            <div class="card-image">
                <img src="../images/show-case.png" alt="">
            </div>
            <div class="card-title">
                <h3><?php echo $fm->ToUpper($result['title']);?></h3>
            </div>
            <div class="card-body">
                <p><?php echo $fm->ReadMore($result['body'],100);?>
                    <a class="read-more" href="post.php?id=<?php echo $result['post_id'];?>">
                        Read More
                    </a>
                </p>
            </div>
        </div>
        <?php }?>
        <?php }else{  } ?>
    </div>
    <!-- pagination start -->
    <div class="pagination">
        <?php $p_query = "SELECT * FROM post"; 
                    $p_result = $db->select($p_query);
                    $total_rows = mysqli_num_rows($p_result);
                    $total_page = ceil($total_rows/$per_page);

                echo '<ul>  <li><a href="index.php?page=1">First</a></li>'; 
                for($i = 1;$i<=$total_page;$i++){
                    echo '<a href="index.php?page='.$i.'">'.$i.'</a>';
                }
               echo '<li><a href="index.php?page= '.$total_page.'">Last</a></li></ul>';

            ?>
    </div>
</section>

<?php include('../inc/footer.php'); ?>