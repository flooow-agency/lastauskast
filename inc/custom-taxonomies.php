<?php
    /*
        =====================
            Custom Taxonomies
        =====================	
    */
    
    function cptui_register_my_taxes_program_category()
    {
        
        /**
         * Taxonomy: Program category.
         */
        
        $labels = [
            "name" => __("Program categories", "lastauskast"),
            "singular_name" => __("Program category", "lastauskast"),
        ];
        
        
        $args = [
            "label" => __("Program categories", "lastauskast"),
            "labels" => $labels,
            "public" => false,
            "publicly_queryable" => false,
            "hierarchical" => true,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "query_var" => true,
            "rewrite" => ['slug' => 'program_category', 'with_front' => true,],
            "show_admin_column" => false,
            "show_in_rest" => true,
            "show_tagcloud" => false,
            "rest_base" => "program_category",
            "rest_controller_class" => "WP_REST_Terms_Controller",
            "rest_namespace" => "wp/v2",
            "show_in_quick_edit" => false,
            "sort" => false,
            "show_in_graphql" => false,
        ];
        register_taxonomy("program_category", ["programs"], $args);
    }
    
    add_action('init', 'cptui_register_my_taxes_program_category');
    
    function cptui_register_my_taxes_blog_category()
    {
        
        /**
         * Taxonomy: Blog category.
         */
        
        $labels = [
            "name" => __("Blog categories", "lastauskast"),
            "singular_name" => __("Blog category", "lastauskast"),
        ];
        
        
        $args = [
            "label" => __("Blog categories", "lastauskast"),
            "labels" => $labels,
            "public" => false,
            "publicly_queryable" => false,
            "hierarchical" => true,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "query_var" => true,
            "rewrite" => ['slug' => 'blog_category', 'with_front' => true,],
            "show_admin_column" => false,
            "show_in_rest" => true,
            "show_tagcloud" => false,
            "rest_base" => "blog_category",
            "rest_controller_class" => "WP_REST_Terms_Controller",
            "rest_namespace" => "wp/v2",
            "show_in_quick_edit" => false,
            "sort" => false,
            "show_in_graphql" => false,
        ];
        register_taxonomy("blog_category", ["blogs"], $args);
    }
    
    add_action('init', 'cptui_register_my_taxes_blog_category');
