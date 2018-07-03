<?php
get_header();

while ( have_posts() ) : the_post(); ?>
    <div class="post">
        <h2 class="title"><a href="#"><?php the_title(); ?>></a></h2>
        <p class="meta">Posted by <a href="#">Someone</a> on July 08, 2013
            &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp;
            <a href="#" class="permalink">Full article</a></p>
        <div class="entry" style="padding: 5px;"><a href="#" class="image image-full"><img src="images/pics01.jpg" alt=""/></a>
            <?php the_content( 'Read More' ); ?>
        </div>
    </div>
<?php
endwhile;

get_footer();
