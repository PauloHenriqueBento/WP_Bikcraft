<?php 

add_action('cmb2_admin_init', 'cmb2_fields_contato');

function cmb2_fields_contato()
{
    $cmb = new_cmb2_box([
        'id' => 'contato_box',
        'title' => 'Contato Repetidor',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => ['page-contato.php']
        ]
    ]);

    $item_contato = $cmb->add_field([
        'name' => 'Item Contato',
        'id' => 'item_contato',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'sortable' => true,
            'add_button' => 'Adicionar Contato',
            'remove_button' => 'Remover Qualidade'
        ]
    ]);

    $cmb->add_group_field($item_contato, [
        'name' => 'Link contato',
        'id' => 'link_contato',
        'type' => 'text_url'
    ]);

    $cmb->add_group_field($item_contato, [
        'name' => 'Link Logo',
        'id' => 'link_logo',
        'type' => 'file',
        'options' => [
            'url' => false
        ]
    ]);
}


?>