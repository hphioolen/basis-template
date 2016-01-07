<div class="row">
	<div class="col-sm-6">
		<?php the_content(); ?>
	</div>
	<div class="col-sm-6">
		<p>
			Wilt u meer informatie of heeft u een vraag? Vul onderstaand contactformulier in en wij komen zo spoedig mogelijk bij u terug.
		</p>
		  <?php gravity_form( 1, false, false, false, '', false ); ?>
	</div>
</div>


<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>