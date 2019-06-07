<?php get_header(); ?>

<main>

<?php

include get_template_directory() . "/template-parts/7-items/_1-heading.php";

include get_template_directory() . "/template-parts/7-items/_2-info.php";

include get_template_directory() . "/template-parts/7-items/_3-gallery-item.php";

include get_template_directory() . "/template-parts/7-items/_4-video.php";

?>

<a class="btn btn--primary margin-bottom-big" href="<?php echo site_url( 'stoly' )?>">Inne Stoły</a>

</main>

<?php get_footer(); ?>