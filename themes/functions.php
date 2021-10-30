<?php 
function functionName() {
    //asking for dependencies (NULL) and then verions type(doesnt matter), then asking if it wants it to run the file before the body closing tag
    wp_enqueue_script('test-scripts-js', get_theme_file_uri('js file path'), NULL, '1.0 (version)', true);
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i')
    // takes two arguments for the wp_enqueue_style('a', b);
    //1 - nickname of stylesheet, 
    //2 - second argument is wp function that locates the file (get_stylesheet_uri())
    wp_enqueue_style('test_main_styles', get_stylesheet_uri());
}

//takes two arguments
//1 - wp specific instructions where we tell it when we want it to run (must be wp_enqueue_scripts)
//2 - name of function you create
add_action('wp_enqueue_scripts', 'functionName'); 


//adding title to website that usually goes in the head section
function functionName_test(){
    add_theme_support();
}

//two arguments
//1 - after_setup_theme
//2 - name of function you create
add_action('after_setup_theme', 'functionName_test');


?>