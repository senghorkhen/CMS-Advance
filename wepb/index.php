<!DOCTYPE html>
<html <?php language_attributes();?>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <title><?php bloginfo('name'); ?></title>

    // Use for file index know to css 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>  
<header>                                                                                                                                                
    <div class="container">
        <h1>
            <?php bloginfo('name')?>
            <span><?php bloginfo('description');?></span>
        </h1>
    </div>
</header>  
<div class="container">
<?php if(have_posts()):?>
    <?php the_post();?>
    <div class="title">
    <h3><?php the_title();?></h3>
    <h3><?php the_author();?></h3>
    <?php the_date();?>
    </div>
   
    <!-- use for display image -->
    <?php if(has_post_thumbnail());?> 

        <div class="post_thumb">
            <?php the_post_thumbnail();?>
        </div>
    <?php else:
    echo "no found"; ?>; 
    <?php endif?>

    <div class="main">
        <p><?php the_excerpt();?></p>
    </div>
    <br>
    <!-- the_permalink() use for link -->
    <a class="btn btn-info" href="<?php the_permalink();?>">Read more...</a>
    
</body> 
</html>