<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>

        <section class="blue lighten-5 destaque-capa-top">
        <div class="container">
        <div id="destaque-principal"> 
        <?php query_posts(array( 'post_type' => 'principal','showposts' => '5' )); ?>
          					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>	
        	<div class="box-principal">
				
				

				<div class="destaque-grande">
					<img src="<?php the_field('destaque'); ?>" >
					<div class="container">
						<div class="row">
							<div class="col s12 m6 bg-azul-chamada">
								<h2><?php echo strip_tags(get_the_title()); ?></h2>
								<p><?php the_content(); ?> </p>	
								<p><a class="waves-effect waves-light btn" href="<?php the_field('endereco_do_link'); ?>" >Confira</a></p>
							</div>	
						</div>
					</div>

				</div><!--.destaque-grande-->
				
				

			


        	</div><!--.box-principal-->
        	<?php endwhile; endif; ?> 
         		<?php wp_reset_query(); ?> 
        	
        	</div>
        	<ul class="lista-nav">
				<li><a href="javascript:;" id="prev2"><img src="imgs/seta-left.jpg"></a></li>
				<li><a href="javascript:;" id="next2"><img src="imgs/seta-right.jpg"></a></li>
        	</ul>
        </section><!--.destaque-principal-->
        </div>
        <section>
        	<div class="container">
				<h1 class="center"><img src="imgs/imagens/entrevistas.png"></h1>

				<ul class="chamadas-entrevistas">
					
					<?php query_posts(array( 'post_type' => 'post','showposts' => '1','cat' => '4' )); ?>
          					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>	
					<li>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php the_field('imagem_para_entrevistas'); ?>" width="273" height="323" class="responsive-img">
								</a>
								<div class="bloco-azul">
									<h3><?php echo strip_tags(get_the_title()); ?><span><i><?php the_time('d/m/Y') ?></i></span></h3>
									<p><? $content = get_the_excerpt();
                                echo substr($content, 0, 150);
                                ?>...</p>
									<p><a class="waves-effect waves-light btn" href="<?php the_permalink(); ?>">Ler na integra</a></p>
								</div>
							
					</li>
					<?php endwhile; endif; ?> 
         		<?php wp_reset_query(); ?> 


					<?php query_posts(array( 'post_type' => 'post','showposts' => '1','cat' => '4','offset' => '1' )); ?>
          			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>	
					<li class="reverso">
						
								<div class="bloco-azul">
									<h3><?php echo strip_tags(get_the_title()); ?><span><i><?php the_time('d/m/Y') ?></i></span></h3>
									<p><? $content = get_the_excerpt();
                                echo substr($content, 0, 150);
                                ?>...</p>
									<p><a class="waves-effect waves-light btn" href="<?php the_permalink(); ?>">Ler na integra</a></p>
								</div>
							
								<a href="<?php the_permalink(); ?>">
									<img src="<?php the_field('imagem_para_entrevistas'); ?>" width="273" height="323" class="responsive-img">
								</a>
							
					</li><!--.col s12 m6 l6-->
					<?php endwhile; endif; ?> 
         		<?php wp_reset_query(); ?> 
				</ul><!--.row-->

				<ul class="chamadas-entrevistas">

					<?php query_posts(array( 'post_type' => 'post','showposts' => '1','cat' => '4','offset' => '2' )); ?>
          			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>	
					<li class="reverso">
						
								<a href="<?php the_permalink(); ?>">
									<img src="<?php the_field('imagem_para_entrevistas'); ?>" width="273" height="323" class="responsive-img">
								</a>
								<div class="bloco-azul">
									<h3><?php echo strip_tags(get_the_title()); ?><span><i><?php the_time('d/m/Y') ?></i></span></h3>
									<p><? $content = get_the_excerpt();
                                echo substr($content, 0, 150);
                                ?>...</p>
									<p><a class="waves-effect waves-light btn" href="<?php the_permalink(); ?>">Ler na integra</a></p>
								</div>
							
					</li>



						<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?> 

							<?php query_posts(array( 'post_type' => 'post','showposts' => '1','cat' => '4','offset' => '3' )); ?>
          					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>	
					<li>
						
								<div class="bloco-azul">
									<h3><?php echo strip_tags(get_the_title()); ?><span><i><?php the_time('d/m/Y') ?></i></span></h3>
									<p><? $content = get_the_excerpt();
                                echo substr($content, 0, 150);
                                ?>...</p>
									<p><a class="waves-effect waves-light btn" href="<?php the_permalink(); ?>">Ler na integra</a></p>
								</div>
							
								<a href="<?php the_permalink(); ?>">
									<img src="<?php the_field('imagem_para_entrevistas'); ?>" width="273" height="323" class="responsive-img">
								</a>
							
					</li><!--.col s12 m6 l6-->
					<?php endwhile; endif; ?> 
         		<?php wp_reset_query(); ?> 
				</ul><!--.row-->

					<p class="center maiop"><a class="waves-effect waves-light btn" href="<?php bloginfo('url'); ?>/onda/entrevistas">mais entrevistas</a></p>

					<p class="center maiop"><?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=super banner&random=1&limit=1' ); ?></p>
        	</div>
        </section>

        <section>
        	<div class="container">
				<div class="row">
					<div class="col s12 m12 l8">
						<p class="center"><img src="imgs/titulo-materias.png" class="reponsinve-img"></p>

						<ul class="listagem-noticias">
							
						<?php query_posts(array( 'post_type' => 'post','showposts' => '5','cat' => '1' )); ?>
          					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<li>
								<div class="data">
									<h4><?php the_time('m') ?><span><?php the_time('M') ?></span></h4>
								</div>
								<a href="<?php the_permalink(); ?>"><?php echo strip_tags(get_the_title()); ?></a>
							</li>
							<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?> 
							
						</ul>

						<p class="center maiop"><a class="waves-effect waves-light btn" href="<?php bloginfo('url'); ?>/onda/materias">mais matérias</a></p>

					</div><!--.col s12 m12 l8-->

					<div class="col s12 m12 l4">
						<div class="bannerx"><img src="imgs/banner-vem.png"></div>

						<div class="banner" style="margin-top: 5px;"><?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=half banner&random=1&limit=1' ); ?></div>
					</div><!--.col s12 m12 l8-->
				</div>
				<p class="center" style="margin:21px 0;"><?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=super banner&random=1&limit=1' ); ?></p>
        	</div>
        </section>

        <section class="box-album">
        	<div class="container">
        			<h1 class="center"><img src="imgs/galeria-mais.png"></h1>
				<div class="row">

				<?php query_posts(array( 'post_type' => 'album','showposts' => '8' )); ?>
          			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<div class="col s12 m6 l3">
							<div class="chama-galeria">
								<a href="<?php the_permalink(); ?>">
									<h3><?php echo strip_tags(get_the_title()); ?></h3>
									
									<img src="<?php the_field('imagem_capa'); ?>" width="275" height="200">
								</a>
							</div>
						</div>
				 <?php endwhile; endif; ?> 
	         	<?php wp_reset_query(); ?>  
						
				</div>

				<p class="center "><a class="waves-effect waves-light btn" href="<?php bloginfo('url'); ?>/album">mais fotos</a></p>
        	</div>
        </section>

      <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>