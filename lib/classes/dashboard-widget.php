<?php
/**
 * Custom functions that act independently of the theme templates
 * 
 * @package StarterWP
 */

    add_action('wp_dashboard_setup', 'agency_dashboard_widgets');
    
        function agency_dashboard_widgets() {
            
            global $wp_meta_boxes;

            wp_add_dashboard_widget(
                'custom_help_widget',
                'Webbyråkontakt',
                'custom_dashboard_help'
            );
        }
    
        function custom_dashboard_help() {
            echo '<p>Detta WP-tema är utvecklat och copyright Henrik Pettersson, <a href="https://hnrkagency.se">HNRK Agency</a>. För rättighetsfrågor gällande installation av temat, kontakta:</p>';
            echo '<p>HNRK Agency • Musik. media & design<br>Fridhemsgatan 29<br>854 60 Sundsvall<br>Sweden</p>';
            echo '<p>+46 (0) 70 490 15 72<br><a href="mailto:kontakt@hnrkagency.se">kontakt@hnrkagency.se</a></p>';
    }
    