<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * WooCommerce Label Replacer
 *
 */
class WC_Label_Replacer
{
    /**
     * Constructor
     */
    public function __construct()
    {
        // make sure WooCommerce is enabled
        if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
            add_action('admin_menu', [$this, 'menu'], 100);
            add_action('admin_head', [$this, 'styles']);
        }
    }

    /**
     * Hook on to menu and change the label
     *
     * @since 1.0
     * @return void
     */
    public function menu()
    {
        global $menu;
        $order_count = wc_processing_order_count();

        foreach ($menu as $i => $item) {
            if ($item[2] == 'woocommerce') {
                $index = $i;
                break;
            }
        }

        $menu[$index][0] = sprintf(
            'Store Setting <span class="awaiting-mod update-plugins count-%s"><span class="processing-count">%s</span></span>',
            $order_count,
            number_format_i18n($order_count)
        );
    }

    /**
     * Add styles to admin header to force new icon for woocommerce
     *
     * @since 1.0
     * @return void
     */
    public function styles()
    {
        echo '
            <style>
                #adminmenuwrap #adminmenu #toplevel_page_woocommerce .menu-icon-generic div.wp-menu-image::before {
                    font-family: dashicons !important;
                    content: "\f323" !important;
                }
            </style>
        ';
    }
}

// init
$WC_Label_Replacer = new WC_Label_Replacer();
