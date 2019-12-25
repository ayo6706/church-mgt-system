<?php
session_start();
    include 'php/db.php';
        $epr="";
    $msg="";
    if (isset($_GET['epr'])) 
        $epr=$_GET['epr'];



    if($epr=='post')
        {
            $id=$_GET['id'];
            $sql="SELECT * FROM blog WHERE id='$id'";
        if ($result = mysqli_query($conn, $sql)){
            $row=mysqli_fetch_assoc($result);

            $_SESSION['id'] = $id;

        }}

    include 'include/header.php';
    include 'include/navbar.php';    
 $currentlink = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            ?>

            <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div id="container" class="main-content">
        <!-- Page content -->
        <div class="container high-padding">
            <div class="row">
                <div class="col-md-8 main-container">
                    <!-- Post content -->
                    <div class="post-content animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <p>
                            <?php
                                $small = substr("".$row['note']."", 0, 388);
                                echo "$small"; 
                            ?>
                            .
                        </p>    

                        <blockquote>
                        <?php
                                $small = substr("".$row['note']."", 388, 688);
                                echo "$small"; 
                            ?>. </blockquote>

                        <img src="img/sticky-notes.jpg" alt="">
                        <p><?php
                                $small = substr("".$row['note']."", 688, 988);
                                echo "$small"; 
                            ?>.</p>

                        <p><?php
                                $small = substr("".$row['note']."", 988, 1288);
                                echo "$small"; 
                            ?>.</p>

                        <p><?php
                                $small = substr("".$row['note']."", 1288, 1588);
                                echo "$small"; 
                            ?>.</p>

                        <p><?php
                                $small = substr("".$row['note']."", 1588);
                                echo "$small"; 
                            ?>.</p>
                    </div>
                    <!-- Post details -->
                    <div class="post-details animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <ul class="tags-list">
                            <li><a data-toggle="tooltip" data-placement="top" data-original-title="6 Posts" href="#">from the church</a></li>
                            <li><a data-toggle="tooltip" data-placement="top" data-original-title="9 Posts" href="#">charity</a></li>
                            <li><a data-toggle="tooltip" data-placement="top" data-original-title="6 Posts" href="#"><?php echo''.$row['date'].'';?></a></li>
                            <li><a data-toggle="tooltip" data-placement="top" data-original-title="6 Posts" href="#"><?php echo''.$row['author'].'';?></a></li>
                        </ul>
                    </div>


        <?php
            echo'<div class="fb-like" data-href="$currentlink" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>';
        ?>
        <?php
       
        echo"<fb:comments href='$currentlink' data-numpost='10'>
            
        </fb:comments>
        ";
        ?>
        
                    <!-- Post footer -->
                    <div class="post-footer sharer animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <div class="share-this-post">

                            <div class="share-title">Spread the word via:</div>
                            <div class="share-via">
                                <div class="social">
                                <?php
                                echo'
                                    <a data-toggle="tooltip" data-placement="top" data-original-title="Share on LinkedIn" href="http://www.facebook.com/sharer/sharer.php?u='.$currentlink.'" target="_blank">
                                        <i class="fa fa-facebook"></i>

                                    </a>';?>
                                </div>
                                <div class="social">
                                    <?php
                                echo'
                                    <a data-toggle="tooltip" data-placement="top" data-original-title="Share on LinkedIn" href="http://www.twitter.com/sharer/sharer.php?u='.$currentlink.'" target="_blank">
                                        <i class="fa fa-twitter"></i>

                                    </a>';?>
                                </div>
                                <div class="social">
                                    <a data-toggle="tooltip" data-placement="top" data-original-title="Share on Google+" href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                                <div class="social">
                                    <a data-toggle="tooltip" data-placement="top" data-original-title="Share on LinkedIn" href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                                <div class="social">
                                    <a data-toggle="tooltip" data-placement="top" data-original-title="Share on whatsapp" href="#">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </div>
                                <div class="social">
                                    <a data-toggle="tooltip" data-placement="top" data-original-title="Share on instagram" href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="btn btn-sm btn-primary btn-link">
                                <a href="guest/index.php">write on blog</a>
                            </div>
                </div>

               <div class="content-sidebar col-md-4">
                    <!-- Widget: Search for posts -->
                    <aside class="widget widget_search animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">Search ...</h3>
                        <form action="" method="post" class="search-form">
                            <label>
                                <input type="search" class="search-field form-control" placeholder="Search for posts" value="" name="search" title="Search for:">
                            </label>
                            <input type="submit" name="submit" value="Search"/>
                        </form>
                    </aside>
                
                    <!-- Widget: Text widget -->
                    <aside class="widget widget_text animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">facebook Widget</h3>
                        <div class="textwidget">
                            <div class="fb-page" data-href="https://www.facebook.com/rcfoui/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/rcfoui/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/rcfoui/">RCF OUI &quot;House of Grace&quot;</a></blockquote></div>
                        </div>
                    </aside>
                    <!-- Widget: Categories -->
                     <!-- Widget: Text widget -->
                    <aside class="widget widget_text animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">Tweet Widget</h3>
                        <div class="textwidget">
                            <a class="twitter-timeline" height="300" data-width="313" href="https://twitter.com/rcfoui?ref_src=twsrc%5Etfw">Tweets by rcfoui</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </aside>
                    <!-- Widget: Categories -->
                    <aside class="widget widget_categories animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="">
                            <li class="cat-item">
                                <a href="#">Church (4)</a>
                            </li>
                            <li class="cat-item">
                                <a href="#">morning digest (3)</a>
                            </li>
                            <li class="cat-item">
                                <a href="#">sermons (7)</a>
                            </li>
                            <li class="cat-item">
                                <a href="#">open heavens (7)</a>
                            </li>
                        </ul>
                    </aside>
                    <!-- Widget: Social Media Widget -->
                    <aside class="widget widget_social_links animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">Follow Us</h3>
                        <div class="social_links">
                            <a href="http://facebook.com/RCFOUI" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" target="_blank"  data-toggle="whatsapp" data-placement="top" data-original-title="whatsapp">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                            
                            <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="LinkedIn">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="http://instagram.com/" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="http://" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Google+">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="http://twitter.com/RCFOUI" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            
                        </div>
                    </aside>
                    <!-- Widget: Text widget -->
                    <aside class="widget widget_text animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">Text Widget</h3>
                        <div class="textwidget">Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.</div>
                    </aside>
                    <!-- Widget: Recent posts with thumbnails -->
                    <aside class="widget widget_recent_entries_with_thumbnail animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">Recent Posts</h3>
                        <ul>
                              <?php 
                   $sql="SELECT * FROM blog
                        ORDER BY id   DESC LIMIT 4";
            if ($result = mysqli_query($conn, $sql)){
                while ($row=mysqli_fetch_assoc($result)) {
                    echo  
                     '
                            <li class="blog-post">
                                <div class="col-md-3 post-thumbnail">
                                    <a href="blog-post.php?epr=post&id='.$row['id'].'"><img class="img-rounded" alt="" src="img/sticky-notes.jpg"></a>
                                </div>
                                <div class="col-md-9 post-details"><a href="blog-post.php?epr=post&id='.$row['id'].'">'.$row['title'].'!</a><span class="post-date">'.$row['date'].'</span></div>
                            </li>';}}?>
                            
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
<?php
            include 'include/footer.php';
        ?>