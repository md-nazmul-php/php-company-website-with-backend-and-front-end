<!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <?php
          $query="select * from package_info";
          $result=$conn->query($query);
          if(mysqli_num_rows($result)>0){
            $col=mysqli_fetch_array($result);
          ?>
          <h2 data-aos="fade-up"><?php echo $col['title']; ?></h2>
          <p data-aos="fade-up"><?php echo $col['description']; ?></p>
        <?php } ?>
        </div>

        <div class="row">
          <?php
          $query="select * from all_package";
          $result=$conn->query($query);
          $i=0;
          if(mysqli_num_rows($result)>0){
            while($col=mysqli_fetch_array($result)){
            ?>
            <!-- Add class in this div by matching conditions table field of database-->
          <div class="col-lg-3 col-md-6
          <?php if($col['package_name']=='Free'){
            echo '';
          }else if($col['package_name']=='Business'){
            echo 'mt-4 mt-md-0';
          }else{
            echo 'mt-4 mt-lg-0';
          } ?>" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>">

          <!-- add featured class in this div by matching condition table field of database-->
            <div class="box <?php if($col['package_name']=='Business') echo 'featured'; ?>">

              <!-- add Span here by matching condition table field of database -->
              <?php if($col['package_name']=='Ultimate') echo '<span class="advanced">Advanced</span>'; ?>

              <h3><?php echo $col['package_title']; ?></h3>
              <h4><sup>$</sup><?php echo $col['package_price']; ?><span> / <?php echo $col['package_type']; ?></span></h4>
              <p id="package_description" style="height: 250px; line-height: 1.6; text-align: center;">
                <?php echo $col['package_description']; ?>
              </p>

              <div class="btn-wrap">
                <a href="<?php echo $col['package_url']; ?>" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        <?php
          $i=$i+100;
          }
        }
       ?>

        </div>
      </div>
    </section><!-- End Pricing Section -->
