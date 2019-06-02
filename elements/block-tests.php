<section class="block-tests">
    <div class="container-fluid">
        <div class="row block-tests__demo">
            <div class="col-lg-6">
                <div class="block-tests__info block-tests__animationL">
                    <h2>Wersja demo systemu enova365</h2>
                    <p>Przetestuj produkt enova365 i poznaj jego możliwości</p>
                    <div class="block-tests__content block-tests__animationL">
                    <div class="content__image">
                        <img src="<?php echo get_template_directory_uri();?>/src/img/demo.png"/>
                    </div>
                    
                    <div class="content__button">
                    <?php $demoLink = esc_attr( get_option( 'demo' ) ); ?>
                        <a href="<?php echo $demoLink; ?>" class="button button--standard">Pobierz i sprawdź</a>
                    </div>
                   
                </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="block-tests__content block-tests__animationR">
                    <h2>Umów bezpłatną prezentację</h2>
                    <p>Lorem ipsum</p>
                </div>
                <div class="block-tests__info block-tests__animationR">
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