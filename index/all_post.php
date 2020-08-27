<?php  $title = 'Posts'; ?>

<?php include('../inc/search_header.php'); ?>

<?php 
    
  if(isset($_GET['all_post_id'])){
      $all_post_id = $_GET['all_post_id'];
  }
?>

<section id="section" class="post-section">
    <div class="post_title">
        <?php    $query = "SELECT * FROM post";
    $post = $db->select($query);
    if($post){
    while($result = $post->fetch_assoc()){ ?>
        <div>
            <?php echo $result['title'];?>
        </div>
        <?php } ?>
        <?php } ?>
    </div>

    <div class="post-body">
        <?php    $query = "SELECT * FROM post ORDER BY RAND() LIMIT 1  ";
    $post = $db->select($query);
    if($post){
    while($result = $post->fetch_assoc()){ ?>
        <h3><?php echo $result['title'];?></h3>
        <?php echo $fm->nl($result['body']);?>
        <?php } ?>
        <?php } ?>
    </div>


    <?php    $query = "SELECT * FROM post
        INNER JOIN category ON post.post_id = category.category_id";
        $post = $db->select($query);
        if($post){
        while($result = $post->fetch_assoc()){ ?>
    <div class="category_title">
        <ul>
            <li><a href="all_post.php?all_post_id=<?php echo $result['category_id']?>">
                    <?php echo $result['name'];?>
                </a>
            </li>
        </ul>
        <?php } ?>
        <?php } ?>
    </div>




</section>

<?php include('../inc/footer.php'); ?>