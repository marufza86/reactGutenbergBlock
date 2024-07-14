<<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <?php wp_head(); ?>
    </head>
    <body>
        
    <?php 
        if(have_posts()) : 
            while(have_posts()) : the_post(); ?>
                <article>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div><?php the_content(); ?></div>
                </article>
                <?php
            endwhile;
        else : ?>
            <p>No posts found.</p>
        <?php
        endif;
    ?>
        
        <script src="" async defer></script>
        <?php wp_footer(  ); ?>
    </body>
</html>