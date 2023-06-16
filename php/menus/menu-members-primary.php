<?php 
    /**
     * php/menus/menu-members-primary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2023.06.16)
     * @copyright 2023 (2023.06.16)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-9',
            'menu_id' => 'Members-Primary'
        )
    );
?>