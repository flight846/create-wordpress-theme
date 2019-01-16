<!-- Theme interface with WP -->
<?php 
    /*
    * Define function to load main.css
    * @@Params arbitrary name, get stylesheet uri style.css in root
    * @@Return 
    */
    function university_files() {
        wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    }
    /* 
    * Actions to Load css scripts to the head
    * @@params - to load script
    * @@return - add styles to  head
    */
    add_action('wp_enqueue_scripts', 'university_files')
?>