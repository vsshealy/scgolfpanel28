<?php 
    /**
     * php/menus/menu-members-secondary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2023.06.16)
     * @copyright 2023 (2023.06.16)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-10',
            'menu_id' => 'Members-Secondary'
        )
    );
?>