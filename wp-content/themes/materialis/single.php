<?php materialis_get_header(); ?>
<div <?php echo materialis_page_content_atts("content post-page"); ?>>
    <div class="gridContainer">
        <div class="row">
            <div class=" <?php echo materialis_posts_wrapper_class(); ?>">
                <div class="post-item">
                    <?php
                    if (have_posts()):
                        while (have_posts()):
					
							$champsMeta = get_post_custom();?>
							<ul class = "post-meta" style="list-style: none">
								<li id="oeuvre-technologie" style="color : red">Technologies : <span class="post-meta-key"><?php echo $champsMeta['Technologie'][0];?></span></li>
								<li id="oeuvre-interoperabilite" style="color : yellow">Interopérabilité : <span class="post-meta-key"><?php echo $champsMeta['Interoperabilite'][0];?></span></li>
								<li id="oeuvre-auteur" style="color : green">Auteur(s): <span class="post-meta-key"><?php echo $champsMeta['Auteur'][0];?></span></li>
								<li id="oeuvre-date" style="color : blue">Date de création : <span class="post-meta-key"><?php echo $champsMeta['Date'][0];?></span></li>
							</ul>
					<?php
                            the_post();
                            get_template_part('template-parts/content', 'single');
                        endwhile;
                    else :
                        get_template_part('template-parts/content', 'none');
                    endif;
                    ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>

</div>
<?php get_footer(); ?>
