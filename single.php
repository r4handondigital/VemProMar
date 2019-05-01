<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>

        <section class="conteudo-bloco">
        		

        		<div class="container">
					<h1 class="center tit-inter"><span><?php the_category(); ?></span></h1>
					<div class="row">
						<div class="col s12">
							<div class="conteudo">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                    <h3 class="mini-tit"><?php echo strip_tags(get_the_title()); ?></h3>


		        				<?php the_content(); ?> 


                      <?php endwhile; endif; ?> 
						      <?php wp_reset_query(); ?>   
							</div><!--.conteudo-->
						</div>
					</div>
        		</div>
        </section>

      <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>