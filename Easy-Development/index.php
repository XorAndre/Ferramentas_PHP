<?php require "functions/core.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--metas-->
        <meta name="author" content="Andre Rodrigues(Xor)">
        <meta name="application-name" content="Easy Development">
        <?php get_style();?>
    </head>
    <body>
        <main class="main">
            <?php get_nav();?>
            <section class="wrap">
                <?php get_topo();?>
                <?php get_views();?>
                <?php get_footer();?>
            </section>
        </main>
    </body>
    <?php get_script();?>
</html>