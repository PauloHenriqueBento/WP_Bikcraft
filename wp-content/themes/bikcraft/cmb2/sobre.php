<?php

add_action('cmb2_admin_init', 'cmb2_fields_sobre');

function cmb2_fields_sobre() {
    $cmb = new_cmb2_box([
        'id' => 'sobre_box',
        'title' => 'Sobre Repetidor',
        'object_types' => ['page'],
        'show_on' => [
          'key' => 'page-template',
          'value' => ['page-sobre.php'],
        ],
      ]);

      // Comentarios qualidade
    $item_qualidade = $cmb->add_field([
      'name' => 'Item Qualidade',
      'id' => 'item_qualidade',
      'type' => 'group',
      'repeatable' => true,
      'options' => [
        'sortable' => true,
        'add_button' => 'Adicionar Qualidade',
        'remove_button' => 'Remover Qualidade',
      ],
    ]);
    
    $cmb->add_group_field($item_qualidade, [
      'name' => 'Titulo Item Qualidade',
      'id' => 'titulo_item_qualidade',
      'type' => 'text',
    ]);
  
    $cmb->add_group_field($item_qualidade, [
      'name' => 'Descrição Item Qualidade',
      'id' => 'descricao_item_qualidade',
      'type' => 'textarea_small',
    ]);

}

?>