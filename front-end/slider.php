
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

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
      <!-- Slide 1 -->
      <!-- <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Welcome to <span>Moderna</span></h2>
          <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="" class="btn-get-started animated fadeInUp">Read More</a>
        </div>
      </div> -->

      <!-- Slide 2 -->
      <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Lorem Ipsum Dolor</h2>
          <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="" class="btn-get-started animated fadeInUp">Read More</a>
        </div>
      </div> -->

      <!-- Slide 3 -->
      <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Sequi ea ut et est quaerat</h2>
          <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="" class="btn-get-started animated fadeInUp">Read More</a>
        </div>
      </div> -->

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero header section -->
