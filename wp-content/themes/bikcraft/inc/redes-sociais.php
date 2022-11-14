<?php $contato = get_page_by_title('contato'); ?>

<ul>
    <?php 
    $item_contato = get_field('item_contato', $contato);
    if(isset($item_contato)) { foreach($item_contato as $item) {
    ?>
        <li><a href="<?php echo $item['link_contato']; ?>" target="_blank"><img src="<?php echo $item['link_logo']; ?>" alt="Facebook Bikcraft"></a></li>
    <?php } } ?>
    
</ul>