<?php
get_header();

while ( have_posts() ) : the_post(); ?>
    <div class="post">
        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="meta">Posted by <a href="#"><?php the_author_link(); ?></a> on <?php the_time( 'Y.m.d - G:i:s' ) ?>
            &nbsp;&bull;&nbsp;
            <a href="<?php comment_link(); ?>" class="comments"><?php comments_number( '0 comments', '1 comment', '% responses' ); ?></a> &nbsp;&bull;&nbsp;
            <a href="<?php the_permalink(); ?>" class="permalink">Read more</a></p>
        <div class="entry" style="padding: 5px;">
            <a href="<?php the_permalink(); ?>" class="image image-full">
				<?php the_post_thumbnail( 'full' ) ?>
            </a>
			<?php the_content( 'Read More' ); ?>
        </div>
    </div>
<?php
endwhile;
comments_template();
get_footer();
