<?php
wp_enqueue_style( 'style', get_stylesheet_uri() );

wp_enqueue_script( 'script1', get_template_directory_uri() . '/js/script1.js', array( 'jquery' ), 1.1, true);

add_action('wp_head', 'your_function_name');
function your_function_name(){
?>
<meta name="author" content="Martin Kedzierski" />
<?php
};


