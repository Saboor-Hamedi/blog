<?php  $title = 'Posts'; ?>

<?php include('../inc/search_header.php'); ?>

<?php 

$search = '';
    if(!isset($_GET['search']) || $_GET['search'] == NULL){ 
   
    }else{
    $search  = $_GET['search'];
    }
?>


<section id="section" class="main-post">

    <div class="post-body">
        <?php $query = "SELECT * FROM post WHERE title LIKE '%$search%' "?>
        <?php $post = $db->select($query);?>
        <?php if ($post) {?>
        <?php while ($result = $post->fetch_assoc()) {?>
      
        <h3><?php echo $result['title']; ?></h3>
        <div>
            <?php echo $fm->nl($result['body']);?>
        </div>

        <?php }?>
        <?php }else{?> 
        <div class="alert alert-success" role="alert">
            Can find more data...
        </div>    
        <div class="suggested-post">
            <p>You may like it...</p>
        </div>
        <div class="suggestion">
            <img src="../images/show-case.png" class="image-profile">
            <img src="../images/show-case.png" class="image-profile">
            <img src="../images/show-case.png" class="image-profile">
            <img src="../images/show-case.png" class="image-profile">
        </div>
        <?php }?>
    </div>
    <!-- this is for more title -->
    <div class="post-title">
    <div class="alert alert-success" role="alert">
           Categories
        </div>
        <?php $more_query = "SELECT * FROM post LIMIT 20" ?>
        <?php $more_post = $db->select($more_query); ?>
        <?php if ($more_post) {
            while ($more_result = $more_post->fetch_assoc()) {?>
        <div class="title">
            <ul>
                <li>
                    <a href="post.php?id=<?php echo $more_result['post_id']?>">
                        <?php  echo $more_result['title'];?>
                    </a>
                </li>
            </ul>
        </div>

        <?php } ?>
        <?php }else{ ?>
        
        <?php }?>
    </div>
</section>
<!-- ======================= show more posts -->

<?php include('../inc/footer.php'); ?>