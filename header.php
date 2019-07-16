<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Awesome theme</title>

    <?php   #detects the page where the posts are displayed
        #if(is_home()):
        ?>
    <?php if(is_front_page()):
        $awesomeclasses = array('awesome-class','my-class'); 
    else:
    $awesomeclasses=array('no-awesome-class');
    endif;?>

</head>
<body <?php body_class($awesomeclasses); ?> >
<?php wp_nav_menu(array('theme_location'=>'Main')); ?>