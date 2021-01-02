<section class="block-tests">
    <div class="container-fluid">
        <div class="row block-tests__demo">
            <div class="col-lg-6" data-aos="fade-right"  data-aos-offset="200"
    data-aos-delay="150">
                <div class="block-tests__info">
                    <?php $demoHeader = get_field('demo_header');
                    if(!empty($demoHeader)){
                        echo "<h2>".$demoHeader."</h2>" ;
                    }?>
                      <?php $demoDescription = get_field('demo_description');
                    if(!empty($demoDescription)){
                        echo "<p>".$demoDescription."</p>" ;
                    }?>
                    <div class="block-tests__content">
                    <div class="content__image">
                        <?php $demoImg = get_field('demo_img'); ?>
                        <img src="<?php echo $demoImg['url']?>"/>
                    </div>
                    
                    <div class="content__button">
                    <?php $demoLink = esc_attr( get_option( 'demo' ) ); ?>
                        <a href="<?php echo $demoLink; ?>" class="button button--standard">Pobierz i sprawdź</a>
                    </div>
                   
                </div>
                </div>
            </div>
            <div class="col-lg-6 " data-aos="fade-left"  data-aos-offset="200"
    data-aos-delay="150">
                <div class="block-tests__content ">
                    <?php $formHeader = get_field('form_header');
                        if(!empty($formHeader)){
                            echo "<h2>".$formHeader."</h2>" ;
                        }?>
                     <?php $formDescription = get_field('form_description');
                    if(!empty($formDescription)){
                        echo "<p>".$formDescription."</p>" ;
                    }?>
                </div>
                <div class="block-tests__info ">
                    <div class="content__icon">
                        <i class="fa fa-wpforms" aria-hidden="true"></i>
                    </div>
                    <div class="content__button">
                        <a href="#" data-toggle="modal" data-target="#formModal" class="button button--standard">Wypełnij formularz</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>