<?php

add_action('cmb2_admin_init', 'cmb2_fields_portfolio');

function cmb2_fields_portfolio() {
    $cmb = new_cmb2_box([
        'id' => 'portfolio_box',
        'title' => 'Portfolio Repetidor',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => ['page-portfolio.php']
        ],
    ]);

    $item_portfolio = $cmb->add_field([
        'name' => 'Item Portfolio',
        'id' => 'item_portfolio',
        'type' => 'group', 
        'repeatable' => true,
        'options' => [
            'sortable' => true,
            'add_button' => 'Adicionar Portfolio',
            'remove_button' => 'Remover Portfolio'
        ],
    ]);

    $cmb->add_group_field($item_portfolio, [
        'name' => 'Portfolio Imagem 1',
        'id' => 'portfolio_image_1',
        'type' => 'file',
        'options' => [
            'url' => false
        ]
    ]);

    $cmb->add_group_field($item_portfolio, [
        'name' => 'Portfolio Imagem Descricao 1',
        'id' => 'portfolio_imagem_descricao_1',
        'type' => 'text'
    ]);

    $cmb->add_group_field($item_portfolio, [
        'name' => 'Portfolio Imagem 2',
        'id' => 'portfolio_image_2',
        'type' => 'file',
        'options' => [
            'url' => false
        ]
    ]);

    $cmb->add_group_field($item_portfolio, [
        'name' => 'Portfolio Imagem Descricao 2',
        'id' => 'portfolio_imagem_descricao_2',
        'type' => 'text'
    ]);

    $cmb->add_group_field($item_portfolio, [
        'name' => 'Portfolio Imagem 3',
        'id' => 'portfolio_image_3',
        'type' => 'file',
        'options' => [
            'url' => false
        ]
    ]);

    $cmb->add_group_field($item_portfolio, [
        'name' => 'Portfolio Imagem Descricao 3',
        'id' => 'portfolio_imagem_descricao_3',
        'type' => 'text'
    ]);


    // Comentarios clientes
    $item_comentario = $cmb->add_field([
        'name' => 'Item Comentario',
        'id' => 'item_comentario',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
          'sortable' => true,
          'add_button' => 'Adicionar Comentário',
          'remove_button' => 'Remover Comentário'
        ]
      ]);
  
      $cmb->add_group_field($item_comentario, [
        'name' => 'Nome Cliente',
        'id' => 'nome_cliente',
        'type' => 'text'
      ]);
  
      $cmb->add_group_field($item_comentario, [
        'name' => 'Comentário Cliente',
        'id' => 'comentario_cliente',
        'type' => 'textarea_small'
      ]);

}

?>