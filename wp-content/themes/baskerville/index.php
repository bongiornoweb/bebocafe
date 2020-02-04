<?php get_header(); ?>

<div class="wrapper section medium-padding">
		
	<div class="content section-inner">
																		                    
		<?php if ( have_posts() ) : ?>
		
			<div class="posts">
					
		    	<?php while ( have_posts() ) : the_post(); ?>
		    	
		    		<div class="post-container">
		    	
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			    	
				    		<?php get_template_part( 'content', get_post_format() ); ?>
				    				    		
			    		</div><!-- .post -->
		    		
		    		</div>
		    			        		            
		        <?php endwhile; ?>
	        	                    
			<?php endif; ?>
			
		</div><!-- .posts -->
			
	</div><!-- .content -->
	
	<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		
		<div class="archive-nav section-inner">
					
			<?php echo get_next_posts_link( '&laquo; ' . __( 'Posts antigos', 'baskerville' ) ); ?>
			
            <?php
            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
            $total_post_count = wp_count_posts();
            $published_post_count = $total_post_count->publish;
            $total_pages = ceil( $published_post_count / $posts_per_page );

            if ( 1 < $paged ) : ?>
            
            <p class="fleft paginacao"><?php printf( __( 'Página %1$s de %2$s', 'baskerville' ), $paged, $wp_query->max_num_pages ); ?></p>
            
	        <?php endif; ?>

            
			<?php echo get_previous_posts_link( __( 'Novos posts', 'baskerville') . ' &raquo;' ); ?>
			
			<div class="clear"></div>
			
		</div><!-- .post-nav archive-nav -->
	
	<?php endif; ?>
			
	<div class="clear"></div>

</div><!-- .wrapper -->
	              	        
<?php get_footer(); ?>