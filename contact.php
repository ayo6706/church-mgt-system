<?php
include 'include/header.php';
include 'include/navbar.php';
include 'php/db.php';
?>



    
                    <!--light-box-files -->       
                    <!-- requried-jsfiles-for owl -->
                        
              <!--requried-jsfiles-for owl -->
                <!-- start content_slider -->
      
    

 
    <div class="contact">
      <div class="contact-head">
        <h2>aBOUT uS</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6 rcflogo">
            <img class="imageclass" src="img/logo.png" alt="CRM logo" >
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 rcflogo">
            <img class="imageclass" src="img/hog.png" alt="RCF OUI logo">
          </div>
        </div>
                 
      </div>
                


      <div class="s-12 m-12 l-12 right" id="spacce">
        <h2>About CRM</h2>
        <font size="5pts" color="black">
          <p>Christ the Redeemer&#8217;s Ministries, a conglomerate of many other ministries, was founded April 1977.</p>
          <p>
            It started as a protest against revival of Idolatry when Nigeria hosted the Second world Black Festival of Arts and Culture (FESTAC`77)
          </p>
          <p>
              Since then it has been organizing programmes in different parts of this country and the World in General by planting Churches and bringing Believers out of lethargy and complacency.
          </p>
          <p>
            With three pronged motto of HOLINESS,FAITH AND LOVE. It has been in the front line, preaching about Sanctification and Holy living as a Pre-requisite for the kingdom of God.
          </p>
          <p>It has also maintained the importance of Faith and Love in every facet of Christian living. The consistency of Her Message over the years has endeared many to this organization.
          </p>
          <p>It is a Friend to all and an enemy to none. It co-operates with other Ministries to organize evangelistic programs from time to time. Visit the <a href="http://crmfamily.org/index.php" target="_blank">website</a> to know more.
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </font>

        <div class="s-12 m-12 l-12 right" id="spacce1">
          <h2>RCF OUI</h2>
          <font size="5pts" color="black">
            <p>Christ the Redeemer&#8217;s Ministries, a conglomerate of many other ministries, was founded April 1977.</p>
            <p>It started as a protest against revival of Idolatry when Nigeria hosted the Second world Black Festival of Arts and Culture (FESTAC`77)</p>
            <p>Since then it has been organizing programmes in different parts of this country and the World in General by planting Churches and bringing Believers out of lethargy and complacency.</p>
            <p>With three pronged motto of HOLINESS,FAITH AND LOVE. It has been in the front line, preaching about Sanctification and Holy living as a Pre-requisite for the kingdom of God.</p>
            <p>It has also maintained the importance of Faith and Love in every facet of Christian living. The consistency of Her Message over the years has endeared many to this organization.</p>
            <p>It is a Friend to all and an enemy to none. It co-operates with other Ministries to organize evangelistic programs from time to time. Visit the <a href="http://crmfamily.org/index.php" target="_blank">website</a> to know more.</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </font>
        </div>
      </div>
    



<!--
    <div class="executive">
      <div class="container">
      <?php
/*
        $sql="SELECT * FROM executive ORDER BY year  ";
        if ($result = mysqli_query($conn, $sql)){
            while ($row=mysqli_fetch_assoc($result)) {
              $year= $row["year"];
              $id= $row["id"];
                ?>
        <h3>executive of year <?PHp echo $row['year']?></h3>
        <div class="example1">
          <div class="owl-demo" class="owl-carousel text-center">
              <?php
             $insql="SELECT * FROM executive where year='$year' ";
        if ($inresult = mysqli_query($conn, $insql)){
            while ($inrow=mysqli_fetch_assoc($inresult)) {
                echo'
            <div class="item mar">
              <a href="#">
                <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">'.$inrow["name"].'</h3>
                        <p class="profession">'.$inrow["position"].''.$inrow["year"].'</p>
                        <p class="text-center">"I\'m the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div> '  ;}} ?> 
            
         
          </div>
        </div><?php ;}} */?>
      </div>
  </div>
    -->



    <div class="excutive">
      <div class="container">
        <h3>excutive of year 2016</h3>
        <div class="example1">
          <div class="owl-demo" class="owl-carousel text-center">   
            <div class="item mar">
              <a href="#">
                <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->.
                    </a>
              <!---->
            </div>  
            <div class="item mar">
              <a href="#">
                <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->.
                    </a>
              <!---->
            </div>  
            <div class="item mar">
              <a href="#">
                <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <div class="item mar">
              <a href="#">
                <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <!--four-->
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->.
                    </a>
              <!---->
            </div>  
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->.
                    </a>
              <!---->
            </div>  
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
          </div>
          <!--Ten-first-row-->
          
          


          <h3>excutive of year 2016</h3>
        <div class="example1">
          <div class="owl-demo" class="owl-carousel text-center">   
            <div class="item mar">
              <a href="#">
                <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->.
                    </a>
              <!---->
            </div>  
            <div class="item mar">
              <a href="#">
                <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->.
                    </a>
              <!---->
            </div>  
            <div class="item mar">
              <a href="#">
                <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <div class="item mar">
              <a href="#">
                <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <!--four-->
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->.
                    </a>
              <!---->
            </div>  
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->.
                    </a>
              <!---->
            </div>  
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
          </div>
          <!--Ten-first-row-->







<h3>excutive of year 2016</h3>
        <div class="example1">
          <div class="owl-demo" class="owl-carousel text-center">   
            <div class="item mar">
              <a href="#">
                <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->.
                    </a>
              <!---->
            </div>  
            <div class="item mar">
              <a href="#">
                <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->.
                    </a>
              <!---->
            </div>  
            <div class="item mar">
              <a href="#">
                <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <div class="item mar">
              <a href="#">
                <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <!--four-->
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->.
                    </a>
              <!---->
            </div>  
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->.
                    </a>
              <!---->
            </div>  
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
            <div class="item mar">
              <a href="#">
        <div class="card-container">
                <div class="card">
                  <div class="front">
                    <div class="cover">
                            
                    </div>
                    <div class="user">
                      <img class="img-circle" src="img/me.jpg"/>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h3 class="name">Ayomide Onibokun</h3>
                        <p class="profession">CEO</p>
                        <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                      </div>
                      <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                      </div>
                    </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                    <div class="header">
                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                      <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">
                          Web design, HTML5, CSS3, js, php, python, java and c.
                        </p>

                        <div class="stats-container">
                          <div class="stats">
                            <h4>235</h4>
                            <p>
                              Followers
                            </p>
                          </div>
                          <div class="stats">
                            <h4>114</h4>
                            <p>
                              Following
                            </p>
                          </div>
                          <div class="stats">
                            <h4>35</h4>
                            <p>
                              Projects
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="footer">
                      <div class="social-links text-center">
                        <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                        <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
        
                      </div>
                    </div>
                  </div> <!-- end back panel -->
                </div> <!-- end card -->
              </div> <!-- end card-container -->
                    </a>
              <!---->
            </div>
          </div>
          <!--Ten-first-row-->
</div>


        </div>
      </div>
    </div>  

    

  


      

    <section class="contact-us" id="CONTACT">
      
    <div class="container wow bounceIn" style="visibility: visible; animation-name: bounceIn;">
            
      <div class="row">

        <div class="col-md-10 col-md-offset-1">
                        
          <div class=" row text-center wow " data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: bounceIn;">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center contact-header">
              <h1>CONTACT US</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
          </div>

             
        </div>


      </div>
            
            
    </div>
            
    <div class="contact-us-form wow bounceIn" style="visibility: visible; animation-name: bounceIn;">
            
            
      <div class="container">
                
        <form name="sentMessage" id="contactForm" class="form" novalidate>
                    
          <div class="row">
                        
            <div class="col-md-4">
              <div class="form-group">
                <input id="name" type="text" class="form-control" placeholder="Name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input id="email" type="email" class="form-control"  placeholder="Email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">  
                <input id="phone" type="tel" class="form-control"  placeholder="contact" required data-validation-required-message="Please enter your contact.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input id="Subject" type="text" class="form-control"  placeholder="Subject">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="form-group">              
                <textarea id="message" class="form-control"  rows="25" cols="10" placeholder="Message Text...." required data-validation-required-message="Please enter your message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
              <div id="success"></div> 
              <div class="form-group">
                <button type="submit" class="btn btn-primary submit-btn form_submit" id="sendMessageButton">Send</button>
            </div>                 
              
                            
            </div>
                        
          </div>
                    
                    
        </form>
                
                
      </div>
            
            
    </div>
            
            
            
            
            
        
  </section>

<?php
        include 'include/footer.php';
      ?>