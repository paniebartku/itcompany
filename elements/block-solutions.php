<section class="block-solutions">
    <div class="container">
        <div class="row block-solutions__header">
            <div class="col-lg-12">
                <?php 
                $header = get_field('solutions_header'); 
                $subHeader = get_field('solutions_subheader');
                if(!empty($header)){
                    echo '<h2>'.$header.'</h2>';
                }
                if(!empty($subHeader)){
                    echo '<h3>'.$subHeader.'</h3>';
                }
                ?>
                </div>
        </div>
        <div class="row">
            <div class="col-lg-4 block-solutions__card">
                <a href = "<?php echo get_field("solutions_link_1") ?>">
                <div class="figure-box">
                    <figure>
                        <?php $img1 = get_field('solutions_img_1'); ?>
                        <img class="img-fluid" src="<?php echo $img1['url'] ?>"/>
                        <figcaption>
                            <a href="<?php echo get_field("solutions_link_1") ?>">Dowiedz się więcej</a>
                        </figcaption>
                    </figure>
                </div>
                </a>
            <h4><?php echo get_field('solutions_name_1') ?></h4>    
            </div>
            <div class="col-lg-4 block-solutions__card">

            <a href = "<?php echo get_field("solutions_link_2") ?>">
            <div class="figure-box">
   
                    <figure>
                     <?php $img2 = get_field('solutions_img_2'); ?>
                     <img class="img-fluid" src="<?php echo $img2['url'] ?>"/>
                        <figcaption>
                        <a href="<?php echo get_field("solutions_link_2") ?>">Dowiedz się więcej</a>
                        </figcaption>
                    </figure>
                </div>
            </a>
            <h4><?php echo get_field('solutions_name_2') ?></h4>    
            </div>

            <div class="col-lg-4 block-solutions__card">
            <a href = "<?php echo get_field("solutions_link_3") ?>">
            <div class="figure-box">
                    <figure>
                        <?php $img3 = get_field('solutions_img_3'); ?>
                        <img class="img-fluid" src="<?php echo $img3['url'] ?>"/>
                        <figcaption>
                        <a href="<?php echo get_field("solutions_link_3") ?>">Dowiedz się więcej</a>
                        </figcaption>
                    </figure>
                </div>
            </a>
            <h4><?php echo get_field('solutions_name_3') ?></h4>    
            </div>

        </div>
 
    </div>
</section>

