<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>

        <section class="conteudo-bloco">
        		

        		<div class="container">
					<h1 class="center tit-inter"><span>Galeria</span></h1>
					<div class="row">
						<div class="col s12">
							<div class="conteudo">

                 <ul class="listagem-noticias">
          					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<li>
								<div class="data">
									<!--<h4><?php the_time('m') ?><span><?php the_time('M') ?></span></h4>-->
                  <?php the_post_thumbnail( 'thumbnail' ); ?>
								</div>
								<a href="<?php the_permalink(); ?>"><?php echo strip_tags(get_the_title()); ?></a>
							</li>
							<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?> 

</ul>
         					 <div class="navigation">
            				<?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
                   		 </div>  



							</div><!--.conteudo-->
						</div>
					</div>
        		</div>
        </section>

      <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>