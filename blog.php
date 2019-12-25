<?php
include 'php/db.php';
include 'include/header.php';
include 'include/navbar.php';
?>

	


	<section class="high-padding white-section">
            <div class="container">
                <!-- Blog posts section -->
                <div class="items-wrap blog_posts_list blog-posts-shortcode">
                    <div class="posts-list grid">
                        <div class="row">

                        <?php

        $sql="SELECT * FROM blog";
        if ($result = mysqli_query($conn, $sql)){
            while ($row=mysqli_fetch_assoc($result)) {
                echo '      <div class="col-md-4">
                                <div class="row">
                                    <div class="single-post clearfix animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                                        <div class="col-md-12 post-thumbnail">
                                            <figure class="effect-lexi">
                                                <img src="img/sticky-notes.jpg" alt="">
                                                <figcaption>
                                                    <i class="icon-arrow-right-circle"></i>
                                                </figcaption>           
                                            </figure>
                                        </div>
                                        <div class="col-md-12 post-details">
                                            <div class="post-details-holder">
                                                <h3 class="post-title"><a href="blog-post.php?epr=post&id='.$row['id'].'">'.$row['title'].'</a></h3>
                                                <div class="more-post-details text-center">
                                                    <a class="more-link" href="blog-post.php?epr=post&id='.$row['id'].'"><i class="icon-user"></i> '.$row['author'].'</a>
                                                    <a class="more-link" href="blog-post.php?epr=post&id='.$row['id'].'"><i class="icon-clock"></i> '.$small = substr("".$row['date']."", 0, 11).'</a>
                                                </div>
                                                <p class="post-excerpt text-center">'.$small = substr("".$row['note']."", 0, 50).'...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';}} ?>
                                                          
                        </div>
                    </div>
                </div>    
            </div>
        </section>




<?php
            include 'include/footer.php';
        ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          