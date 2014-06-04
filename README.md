# SurgeWP Skeleton Theme

Based on the [HTML5 Blank WordPress Theme](http://html5blank.com/) With [Twitter Bootstrap](http://http://getbootstrap.com/)



## conventions

### Naming files
* Variable, action, and function names: Use lowercase letters in  *(never camelCase)*. Separate words via underscores: ```function some_name( $some_variable )```
* Class names: use capitalized words separated by underscores: ```class Walker_Category```
* Files: use lowercase letters. Hyphens should separate words. ```my-plugin-name.php```



### Adhere to Wordpress coding standards
Found here: http://make.wordpress.org/core/handbook/coding-standards/php/

Examples:
* use single quotes to wrap html: ```echo '<a href="/static/link" title="Yeah yeah!">Link name</a>';```
* Use tabs. Tabs should equal 4 spaces.
* use lots of white space.
  * use spaces inside brackets: ```foreach ( $foo as $bar )```
  * use blank lines and groups of 3 blank lines to make code readable
    ```
    function my_function()
    {
        global $post;

        $post_title = $post->title;
        return '<b>' . $post_title . '</b>';
    }



    function another_function()
    {
        global $post;

        $post_content = $post->content;
        return '<b>' . $post_content . '</b>';
    }
    ```



### Do not use index.php

Instead create a page called "homepage", and use the ```page-homepage.php``` template.



### Do not put any PHP in ```functions.php```

Instead put all code in separate, well-named files in ```/lib```



### CSS
* put all rules in alphabetical order



### put all template parts in ```/templates```
* Anything that isn't a complete page should go into ```/templates```
* create lots of sub-directories, like ```/homepage``` and ```/gallery```



### use ```include(locate_template('templates/pagination.php'));``` instead of ```get_template_part('pagination');```
* This way template parts have access to loop and global variables


