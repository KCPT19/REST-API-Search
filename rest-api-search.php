<?php
/*
Plugin Name: REST API Search
Description: Adding in the missing search functionality of all post types to the REST API v2 plugin.
Version:     1.0
Author:      KCPT
Author URI:  https://github.com/orgs/KCPT19
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die();

class REST_API_Search
{

    public function __construct()
    {

        add_action( 'rest_api_init', array( $this, 'restAPI' ) );

    }

    public function restAPI()
    {

        register_rest_route( 'wp/v2', '/search/(?P<search>[a-zA-Z+]*)[/]*(?P<page>\d*)', array(
            'methods' => 'GET',
            'callback' => array( $this, 'search'),
            'args' => array(
                'class' => array(
                  'default' => 'col-md-4'
                ),
                's' => false
            ),
        ));

    }

    public function search( WP_REST_Request $request )
    {

        $search = $request->get_param( 'search' );
        $page = $request->get_param( 'page' );

        if( empty( $page ) )
            $page = 1;

        $page = intval( $page );

        $search = implode( ' ', explode( "+", $search ) );

        $posts = get_posts(array(
            'page' => $page,
            'post_type' => 'any',
            'posts_per_page' => 10,
            's' => $search
        ));

        return $posts;

    }

}

$RESTAPISearch = new REST_API_Search();
