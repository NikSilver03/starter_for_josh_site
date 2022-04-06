<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>
<section class="container-fluid aboutbg text-center">
            <div class="container">
            <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
            <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>        
        </div><!-- container-->
            <div class="blocker"></div>
        </section>

        <section class="container-fluid articlesbg">
            <div class="container">
                <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
                </div>
                <div class="row"><!--  a row that gives us access to the BS columns-->
                    
                    <div class="col-md-4">
                    <img class="img-fluid" alt=“portait” src="<?php the_field('articleimage');?>"> 
                    <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
                    <p class="date" ><?php the_field('articledate'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
                    <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
                    </div>
                    <div class="col-md-4">
                    <img class="img-fluid" alt=“portait” src="<?php the_field('articleimagesect2');?>">
                        <h4 class="article-title">A MODEL</h4>
                        <p class="date">12 December 2020</p>
                        <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
                        </p>
                        <a class="readmore" href="#" >CONTINUE READING</a>
                    </div>
                    <div class="col-md-4">
                    <img class="img-fluid" alt=“portait” src="<?php the_field('articleimagesect3');?>">
    
                        <h4 class="article-title">A GAMES DESIGN</h4>
                        <p class="date" >12 December 2020</p>
                        <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
                        </p>
                        <a class="readmore" href="#" >CONTINUE READING</a>
                      </div>
                    </div><!-- row-->
                </div><!-- container-->
               </section><!-- container-fluid-->
<?php get_footer(); ?>