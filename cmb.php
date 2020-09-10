<?php

function cfcr_get_option($key = '', $default = false)
{
    if (function_exists('cmb2_get_option')) {
        // Use cmb2_get_option as it passes through some key filters.
        return cmb2_get_option('cfcr_options', $key, $default);
    }

    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option('cfcr_options', $default);

    $val = $default;

    if ('all' == $key) {
        $val = $opts;
    } elseif (is_array($opts) && array_key_exists($key, $opts) && false !== $opts[$key]) {
        $val = $opts[$key];
    }

    return $val;
}

function cfcr_return_pages()
{
    $pages = get_pages();
    $arr_return = [];
    foreach ($pages as $page) :
        $arr_return[$page->ID] = $page->post_title;
    endforeach;
    return $arr_return;
}

add_action('cmb2_admin_init', 'cfcr_register_theme_options_metabox');

function cfcr_register_theme_options_metabox()
{

    $cmb_options = new_cmb2_box(array(
        'id'           => 'cfcr_option_metabox',
        'title'        => esc_html__('Formulário de Contato', 'cfcr'),
        'object_types' => array('options-page'),

        'option_key'      => 'cfcr_options', // The option key and admin menu page slug.
        // 'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
        // 'menu_title'      => esc_html__( 'Options', 'cfcr' ), // Falls back to 'title' (above).
        'parent_slug'     => 'convertefacil', // Make options page a submenu item of the themes menu.
        // 'capability'      => 'manage_options', // Cap required to view options-page.
        // 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
        // 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
        // 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
        // 'save_button'     => esc_html__( 'Save Theme Options', 'cfcr' ), // The text for the options-page save button. Defaults to 'Save'.
    ));

    /*
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */

    $cmb_options->add_field(array(
        'name' => __('Página de resposa do Formulário de Contato', 'cfcr'),
        'id'   => 'cfcr_resposta_id',
        'type' => 'select',
        'options_cb' => 'cfcr_return_pages',
        'show_option_none' => true
    ));
}
