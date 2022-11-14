<?php $portfolio = get_page_by_title('portfolio'); ?>
<ul class="portfolio_lista rslides_portfolio">
    <?php 
    $item_portfolio = get_field('item_portfolio', $portfolio);
    if(isset($item_portfolio)) { foreach($item_portfolio as $item) {
    ?>
    <li>
        <div class="grid-8"><img src="<?php echo $item['portfolio_image_1']; ?>" alt="<?php echo $item['portfolio_imagem_descricao_1']; ?>"></div>
        <div class="grid-8"><img src="<?php echo $item['portfolio_image_2']; ?>" alt="<?php echo $item['portfolio_imagem_descricao_2']; ?>"></div>
        <div class="grid-16"><img src="<?php echo $item['portfolio_image_3']; ?>" alt="<?php echo $item['portfolio_imagem_descricao_3']; ?>"></div>
    </li>
    <?php } } ?>
</ul>

<?php if(!is_page('portfolio')) { ?>
<div class="call">
    <p><?php the_field('chamada_portfolio', $portfolio); ?></p>
    <a href="portfolio/" class="btn">Portfólio</a>
</div>

<?php } ?>