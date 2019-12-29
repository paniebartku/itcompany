<?php get_header(); ?>
<section class="block-search ">
<div class="container">
    <div class="row">
    <div class="col-sm-12">
            <div class="search__header--main">
                <h1>Wyniki wyszukiwania dla: <span class="search__header--ask"><?php echo get_query_var('s'); ?></span></h1>
            </div>
</div>
    </div>
    <?php 
   $s=get_search_query();
   if(!empty ($s)){
   $args = array(
                   's' =>$s
               );
             }
   $the_query = new WP_Query( $args );

   
if ( $the_query->have_posts() ): 
    _e("<div class='search__header--news'><h2 class=''>Aktualności:</h2></div>");
  
    $countNews = 0; 
while ( have_posts() ) : the_post();   

   if (  get_post_type() === 'post' &&  get_post_type() !== 'page' ){
     
       ?>
   <div class="row search__item">

   <div class="col-md-5 col-sm-12">

<div class="item--image">

<?php if( has_post_thumbnail() ):
     $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
 endif;    ?>
 <img class="img-fluid" src="<?php echo $image ?>"/>

</div>


   </div>
   <div class="col-md-7 col-sm-12">
<div class="item--content">
<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
    <?php echo the_excerpt(); ?>

</div>


</div>

</div>


                    <?php  $countNews++;
                    }
                    
               
              //echo $countNews;
            endwhile; ?>
            <?php    wp_reset_postdata(); ?>
          
           <div class='search__header--pages'><h2 class=''>Strony:</h2></div>
            <?php
            while ( have_posts() ) : the_post(); $countPages = 0;  ?>
                
            <?php if (  get_post_type() === 'page' ){
               
               
                ?>
                <div class="row search__item">
                <div class="col-md-5 col-sm-12">

                        <div class="item--image">

                        <?php    if( has_post_thumbnail() ):
                            $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
                        endif;   ?>
                        <img class="img-fluid" src="<?php echo $image ?>"/>

                        </div>
                    </div>

                    <div class="col-md-7 col-sm-12">
                    <div class="item--content">
                    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                        <?php echo the_excerpt(); ?>

                    </div>


                    </div>            

                </div>
              
                <?php   $countPages++; }
                
                
               
            endwhile;
            

             wp_reset_postdata(); 
           // echo $countPages; 
            
            else : ?>
            <h2 style='font-weight:bold;color:#000'>Nic nie znaleziono</h2>
                    <div class="alert alert-info">
                      <p>Przykro nam, ale może spróbuj z użyciem innych kryteriów.</p>
                    </div>
                   
            
            
            <?php endif; ?>   






</div>

</section>
<?php if($countPages == 0){?>
  <style>
      .search__header--pages {display:none!important;}
  </style>
  <?php } ?>
  <?php if($countNews  <= 0){?>
  <style>
      .search__header--news {display:none!important;}
  </style>
  <?php } ?>
<?php get_footer(); ?>