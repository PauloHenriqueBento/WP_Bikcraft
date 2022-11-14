<?php

// Função de ajuda

function get_field1($key, $page_id = 0)
{
    $id = $page_id != 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
}

function the_field1($key, $page_id = 0) {
    echo get_field1($key, $page_id);
}

// Arquivo por página
require_once get_template_directory() . '/cmb2/sobre.php';
require_once get_template_directory() . '/cmb2/portfolio.php';
require_once get_template_directory() . '/cmb2/contato.php';

?>