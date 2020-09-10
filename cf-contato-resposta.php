<?php

/**
 * Plugin Name: Converte Fácil: Contato Resposta
 * Description: Plugin para adicionar uma página de resposta ao formulário de contato
 * Version: 1.0.0
 * Author: Ingo Stramm
 * Text Domain: cfcr
 */

function cfcr_debug($a)
{
    echo '<pre>';
    var_dump($a);
    echo '</pre>';
}

require_once 'tgm/tgm.php';

add_action('wp_head', 'cfcr_define_global_js_var');

function cfcr_define_global_js_var()
{
    $page_id_contato_resposta = cfcr_get_option('cfcr_resposta_id');
    if (isset($page_id_contato_resposta) && !empty($page_id_contato_resposta && !is_null($page_id_contato_resposta))) :
?>
        <script>
            var contato_resposta_page = {
                id: <?php echo $page_id_contato_resposta; ?>,
                url: '<?php echo get_permalink($page_id_contato_resposta); ?>'
            }
        </script>
<?php
    endif;
}
require_once 'cmb.php';
require_once 'shortcode.php';
require_once 'plugin-update-checker-4.10/plugin-update-checker.php';
$updateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://raw.githubusercontent.com/IngoStramm/cf-contato-resposta/master/info.json',
    __FILE__,
    'cfrf'
);
