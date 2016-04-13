<?php
/*
Plugin Name: REST API Search
Plugin URI:  https://github.com/KCPT19/REST-API-Search
Description: Adds in the missing search functionality of all post types to the REST API v2 plugin.
Version:     1.4
Author:      KCPT
Author URI:  https://github.com/orgs/KCPT19
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die();

class REST_API_Search
{

    protected $posts;

    public function __construct()
    {

        add_action( 'rest_api_init', array( $this, 'restAPI' ), 100 );

    }

    public function restAPI()
    {

        require_once dirname( __FILE__ ) . '/lib/class-wp-rest-search-controller.php';

        $this->controller = new WP_REST_Search_Controller();
        $this->controller->register_routes();

    }


}

$RESTAPISearch = new REST_API_Search();
