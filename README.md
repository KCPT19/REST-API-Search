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
