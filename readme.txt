=== Plugin Name ===
Contributors: KCPT, Fastmover
Donate link: https://kcpt.org/donate/
Tags: REST API, REST API Search, API Search, Search
Requires at least: 4.4
Tested up to: 4.4.2
Stable tag: 1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This adds the missing functionality of Search into the WordPress REST API.

== Description ==

# REST API Search #
## This is only for Version 2 of the REST API Plugin ##

This adds the missing functionality of Search into the WordPress REST API.
The issue being with the current REST API Version 2, you can only search on a per post_type basis.

    /wp-json/wp/v2/posts?filter[s]=apples

    /wp-json/wp/v2/pages?filter[s]=apples

### What this plugin does. ###

**Adds the search functionality for all posts types except revisions and types with 'exclude_from_search' set to true.**

    /wp-json/wp/v2/search/apples

**In case of a multi word string, just replaces the spaces with plus signs.**

    /wp-json/wp/v2/search/apples+pears


**Also adds easy paging**

page 2:

    /wp-json/wp/v2/search/apples+pears/2


page 3:

    /wp-json/wp/v2/search/apples+pears/3

[Github](https://github.com/KCPT19/REST-API-Search)

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/rest-api-search` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress

== Frequently Asked Questions ==

= How do I use this plugin? =

This plugin is meant to be used by experienced developers. You can access the search by going to your WordPress URL, and adding the following to the end of the URL: /wp-json/wp/v2/search/
After the search/ you put any keywords you're searching for, replaces spaces with plus (+) signs.

== Changelog ==

= 1.0 =
* Initial Version
* Fully working version which searches all post types except revisions and types with 'exclude_from_search' set to true.

= 1.1 =
* Restructured code to allow for custom fields added in by other plugins

= 1.2 =
* Bug Fix - namespace variable of class needs to be protected.

= 1.3 =
* Now allows for encoded characters and numbers in the url

= 1.4 =
* WordPress's posts per page settings now are used.
