<?php
/**
 * Theme help page.
 * 
 * @package welearntStart
 */


namespace BootstrapBasic5\Controller;

if (!class_exists('\\BootstrapBasic5\\Controller\\ThemeHelp')) {
    /**
     * This class will act as controller to display theme help page.
     */
    class ThemeHelp
    {


        /**
         * Add actions or filters that will be hook into display theme help page.
         * 
         * To use, just code as follows:
         * 
         * $ThemeHelp = new \BootstrapBasic5\Controller\ThemeHelp();
         * $ThemeHelp->addActionsFilters();
         * 
         * That's it.
         */
        public function addActionsFilters()
        {
            if (is_admin()) {
                // If we are in admin pages.
                // Add theme help to the menu.
                add_action('admin_menu', array($this, 'themeHelpMenu'));
            }
        }// addActionsFilters


        /**
         * Add theme help to the menu.
         * 
         * @access private Do not access this method directly. This is for hook callback not for direct call.
         */
        public function themeHelpMenu()
        {
            add_theme_page(__('Bootstrap Basic4 help', 'welearntStart'), __('Bootstrap Basic4 help', 'welearntStart'), 'edit_posts', 'bsb4_help', array($this, 'themeHelpPage'));
        }// themeHelpMenu


        /**
         * Display the theme help page content.
         * 
         * @access private Do not access this method directly. This is for hook callback not for direct call.
         */
        public function themeHelpPage()
        {
            include get_template_directory() . '/inc/views/ThemeHelp/themeHelpPage_v.php';
        }// themeHelpPage


    }
}