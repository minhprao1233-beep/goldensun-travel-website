<?php

// Function to enqueue scripts and styles
function goldensun_enqueue_assets() {
    
    // Enqueue Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600&display=swap', array(), null );
    
    // Enqueue Tailwind CSS from CDN
    wp_enqueue_script( 'tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false ); // Set last parameter to false to load in head

    // Enqueue Main Stylesheet
    wp_enqueue_style( 'goldensun-style', get_stylesheet_uri() );

}

// Add the function to the WordPress hook
add_action( 'wp_enqueue_scripts', 'goldensun_enqueue_assets' );

?>
