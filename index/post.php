<?php $title  ="POST"; ?>
<?php include('../inc/search_header.php'); ?>
<?php
if (!isset($_GET['id']) || $_GET['id'] == null) {
    header('404.php');
} else {
    $id=$_GET['id'];
}
?>

<main id="main">
    <section id="section" class="main-post">
    <div class="post-body">
            <?php $query = "SELECT * FROM post 
            INNER JOIN category ON post.post_id=category.category_id
            WHERE post.post_id = '$id'"; ?>
            <?php $post = $db->select($query);?>
            <?php if ($post) {?>
            <?php while ($result = $post->fetch_assoc()) {?>
                <h3><?php echo $result['title']; ?></h3>
                <?php echo $fm->nl($result['body']);?>
                <div class="suggestion">
                <img src="../images/show-case.png" class="image-profile">
                <img src="../images/show-case.png" class="image-profile">
                <img src="../images/show-case.png" class="image-profile">
                <img src="../images/show-case.png" class="image-profile">
                </div>
            <?php }?>
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
            <div class="alert alert-success" role="alert">
                Can find more data...
            </div>
            <?php }?>
        </div>
    </section>
    <!-- ======================= show more posts -->

</main>


<?php include('../inc/footer.php'); ?>