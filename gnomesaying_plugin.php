<?php
/*
Plugin Name: Gnome Sayin'
Plugin URI: http://example.com
Description: Simple Q&A
Version: 1.0
Author: IM4420
Author URI: 
*/

// TASK 1
function welcome() {
        
    echo "<h1>Welcome</h1>";
}

function qp_shortcode() {
    ob_start(); // WP function, way to display plugin fast as it can
    
    welcome();
    
    return ob_get_clean(); 
}

add_shortcode( 'question_plugin', 'qp_shortcode' );

?>
// END TASK 1


// TASK 2 - CREATE questions hook
    require_once (dirname(__FILE__) . '/question_table.php');
Add a comment to this line
register_activation_hook( __FILE__, 'questions_install_db' ); // Called when our plugin is activated
// END TASK 2


// TASK 3 - INSERT questions hook

// END TASK 3


// TASK 4 - CREATE questions hook

// END TASK 4


// TASK 5 - INSERT questions hook
require_once (dirname(__FILE__) . '/insert_sample_answer.php');
register_activation_hook( __FILE__, 'insert_sample_answer' ); // Called when our plugin is activated
// END TASK 5