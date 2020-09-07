<?php  $title = 'Home'; ?>
<?php include('../inc/header.php');?>

<!-- start main -->
<!-- start showcase -->
<div class="show-case">
    <div class="show-case-title">
        <h2>Welcome to the Afghan Blog</h2>
    </div>
    <div class="show-case-body-text">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, odit?
        </p>
    </div>
</div>

<!-- start section a -->
<section id="section_a">
    <?php $query = "SELECT * FROM post LIMIT 4";
          $post = $db->select($query);
          if ($post) {
              while ($result = $post->fetch_assoc()) {?>

    <div class="card">
        <div class="card-image">
            <img src="../images/show-case.png" alt="">
        </div>
        <div class="card-title">
            <h4><?php echo $result['title'];?></h4>
        </div>
        <div class="show-card-body">
            <p>
                <?php echo $fm->ReadMore($result['body'], 150);?>
            </p>
        </div>
    </div>
    <?php }
          }?>
</section>


<!-- end main -->


<?php include('../inc/footer.php');?>