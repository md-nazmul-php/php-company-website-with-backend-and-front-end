 
<

 <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">


        <?php
        $query="select * from service_info";
        $result=$conn->query($query);
        if(mysqli_num_rows($result)>0){
          $col=mysqli_fetch_array($result);
            ?>
        <div class="section-title" data-aos="fade-up">
          <h2><?php echo $col['title']; ?></h2>
          <p><?php echo $col['description']; ?></p>
        </div>
      <?php }?>

        <div class="row">
        
        <?php
        $query="select * from all_service";
        $result=$conn->query($query);
       // $a=100;
        $i=0;
        if(mysqli_num_rows($result)>0){
          while($col=mysqli_fetch_array($result)){
          ?>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>">
            <div class="icon-box">
              <div class="icon"><i class="icofont-earth"></i></div>
              <h4 class="title"><a href="<?php echo $col['service_url']; ?>"><?php echo $col['service_title']; ?></a></h4>
              <p class="description"><?php echo $col['service_description']; ?></p>
            </div>
          </div>

           <?php
        $i=$i+100;
         }
        } ?>

          <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-computer"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="icofont-earth"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="icofont-image"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="icofont-settings"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="icofont-tasks-alt"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div> -->
        </div>

      </div>
    </section><!-- End Services Section -->