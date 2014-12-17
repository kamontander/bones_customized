<?php get_header(); ?>

<div id="content" class="wrap">

  <div id="inner-content" class="cf">

      <div id="main" class="cf" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

          <header class="article-header">

            <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

          </header> <?php // end article header ?>

          <section class="entry-content cf">
            <?php the_content(); ?>
          </section> <?php // end article section ?>

        </article> <?php // end article ?>

        <?php endwhile; ?>

            <?php bones_page_navi(); ?>

        <?php else : ?>

          <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>

        <?php endif; ?>

      </div> <?php // end #main ?>

      <?php get_sidebar(); ?>

  </div> <?php // end #inner-content ?>

</div> <?php // end #content ?>

<?php get_footer(); ?>
