<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <p><?php wp_head() ?></p>

</head>

<body>
    <nav>
        <ul>
            <li>home</li>
            <li>work</li>
            <li>about</li>
        </ul>
    </nav>
    <h1>Gallery</h1>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();

    ?>
            <h4><?php the_title() ?></h4>
            <p><?php the_author() ?></p>
            <p><?php the_date() ?></p>
            <p><?php the_content() ?></p>

    <?php
        endwhile;
    endif;
    ?>
    <p><?php wp_footer() ?></p>

</body>

</html>