<?php
// Template Name: Portfolio
get_header();
?>
<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<?php include(TEMPLATEPATH . '/inc/introducao.php'); ?>	

		<section class="container animar-interno">
			<ul class="rslides">
				<?php 
				$item_comentario = get_field('item_comentario');
				if(isset($item_comentario)) { foreach($item_comentario as $item) { 
				?>
				<li>
					<blockquote class="quote_clientes">
						<p><?php echo $item['comentario_cliente'] ?></p>
						<cite><?php echo $item['nome_cliente'] ?></cite>
					</blockquote>
				</li>
				<?php } } ?>
			</ul>
		</section>

		<section class="portfolio">
			<div class="container">
				<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php")?>
			</div>
		</section>

	<?php endwhile; else: endif; ?>

<?php get_footer(); ?>