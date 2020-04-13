
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
 
   
          <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
              
 

 <canvas id="demo-canvas" class="large-header"></canvas>

      <?php
        $query="select * from home_slide";
        $result=$conn->query($query);
        if(mysqli_num_rows($result)>0){
          while($col=mysqli_fetch_array($result)){
            ?>
            <!-- if status = active then add 'active' class in this div Otherwise not-->
      <div class="carousel-item <?php if($col['status']=='active')echo 'active'; ?>">
        <div class="carousel-container">
            
  
          <h2 class="animated fadeInDown"><?php echo $col['slide_title']; ?></h2>
          <p class="animated fadeInUp"><?php echo $col['slide_description']; ?></p>
          <a href="<?php echo $col['read_more']; ?>" class="btn-get-started animated fadeInUp">Read More</a>
        </div>
      </div>
      <?php 
      }  }  ?>
     

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
    
                    <div id="large-header" > </div>
   
  </section>