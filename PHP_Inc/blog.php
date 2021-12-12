<div class="blog">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>From Products</p>
                <h2>Latest Product Information</h2>
            </div>
            <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.1s">


                  <?php
              try{
              require('Classes/Product.php');


              $product[0] = new Product("img/product/WALLPRIMER_01_1.png","Wall Primer","Multi-purpose Primer and Sealer is a synchronised acrylic-based primer in water dispersion. This product is best suited for interior and exterior surfaces. Wall primer is suitable for priming walls, asbestos, brickwork, etc.","Wall-Primer.php","⭐","Primer","5","unlimited");
              $product[1] = new Product("img/product/WallPrimerextscreen.png","Exterior Wall Primer","Exterior Latex Primer and Sealer is a micronized acrylic-based primer in water dispersion.","Wall-Primer-Exterior.php","⭐","Primer","5","unlimited");
              $product[2] = new Product("img/product/SUPER_PLUS_REASONABLE_EMULSION-screen.png","Super Plus Reasonable Emulsion","Interior Flexible Latex paint has good flexibility and an attractive semi-gloss finish in Shine Emulsion which is resistant to dirt pick-up from the atmosphere.","Super-plus-Reasonable-Emulsion.php","⭐","Emulsion","5","unlimited");
              $product[3] = new Product("img/product/WALSPER_SUPERIOR_ACRYLIC_EMULSION-screen.png","Wallsper Superior ACRYLIC Emulsion","Ecomate is a water-based exterior emulsion formulated with advanced ingredients and technology suitable to various climatic conditions. ","Walsper-Superior-Acrylic-Emulsion.php","⭐","Emulsion","5","unlimited");
              $product[4] = new Product("img/product/ULTIMATE_SEMI_GLOSS_EULSIONscreen.png","Ultimate Semi GLOSS Emulsion","Techno Protect Plus High-Quality Exterior Wall Latex Paint is water-based, 100% pure acrylic resin emulsion paint.  A new generation of high-grade wall paint, refined by the perfect combination of the odourless new technology and film-function for a long time.","Ultimate-Semi-Gloss-Eulsion.php","⭐","Emulsion","5","unlimited");
              $product[5] = new Product("img/product/primer02screen.png","Super Plus Reasonable Primer","Super plus reasonable Primer and Sealer is a micronized acrylic-based primer in water dispersion. This is an acrylic resin-based primer with water dispersion property that penetrates better than normal water-based primers.","Super-plus-reasonable-Primer.php","⭐","Primer","5","unlimited");
              $product[6] = new Product("img/product/acrylic_wall.png ","Acrylic Putty","Specially designed acrylic putty manufactured to offer white smooth finish, strength and durability to heat. This is highly useful for sealing cracks, holes, gaps, joints.","Acrylic-Wall-Putty.php","⭐","Wall Putty","5","unlimited");
              }catch(Exception $e){
                echo $e;
              }

              ?>
              <?php
  foreach($product as $p) {
  ?>
                <div class="blog-item">
                    <div class="blog-img">
                        <a href="<?php echo $p->get_link();?>">  <img src="<?php echo $p->get_image();?>" alt="<?php echo $p->get_name();?>"> </a>
                    </div>
                    <div class="blog-text">
                    <a href="<?php echo $p->get_link();?>">    <h2><?php echo $p->get_name();?></h2> </a>
                        <div class="blog-meta">
                            <p><i class="far fa-list-alt"></i><?php echo $p->get_category();?></p>

                        </div>
                        <p>
                        <?php echo substr($p->get_description(),0,100);?>..
                        </p>
                        <a class="btn" href="<?php echo $p->get_link();?>">View Product <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <?php
                }
                ?>


            </div>
        </div>
    </div>
