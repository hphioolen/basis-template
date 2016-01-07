<?php if (is_front_page()): ?>

	<?php 	get_template_part('templates/includes/partner-flexslider'); ?>

<?php elseif (is_singular('product')): ?>

	<?php 	get_template_part('templates/includes/galery-product'); ?>

<?php endif; ?>