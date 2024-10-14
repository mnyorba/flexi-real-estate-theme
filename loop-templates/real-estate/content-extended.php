<?php
$fields = get_field_objects( $post->ID );
?>
<hr>
<h2 class="h4 mb-3"><?php echo esc_html( $fields['apartments']['label'] ) . ':'; ?></h2>
<div class="row">
	<?php
	if( have_rows('apartments') ):
		while ( have_rows('apartments') ) : the_row();
			?>
			<div class="col-6 gy-3">
				<div class="row">
					<div class="col-6">
						<?php $field = get_sub_field_object( 'apartment_image'); ?>
						<?php if( $field['value'] ): ?>
							<div>
								<?php echo wp_get_attachment_image( $field['value']['id'], 'full' ); ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-6">
						<?php $field = get_sub_field_object( 'area'); ?>
						<div>
							<i class="fa fa-arrows-alt" aria-hidden="true"></i>
							<?php echo esc_html( $field['label'] .': '. $field['value'] ); ?>
						</div>
						<?php $field = get_sub_field_object( 'number_of_rooms'); ?>
						<div>
							<i class="fa fa-th-large" aria-hidden="true"></i>
							<?php echo esc_html( $field['label'] .': '. $field['value'] ); ?>
						</div>
						<?php $field = get_sub_field_object( 'balcony'); ?>
						<div>
							<i class="fa fa-square-o" aria-hidden="true"></i>
							<?php echo esc_html( $field['label'] .': '. $field['choices'][$field['value']] ); ?>
						</div>
						<?php $field = get_sub_field_object( 'bathroom'); ?>
						<div>
							<i class="fa fa-shower" aria-hidden="true"></i>
							<?php echo esc_html( $field['label'] .': '. $field['choices'][$field['value']] ); ?>
						</div>
					</div>
				</div>
			</div>
			<?php
		endwhile;
	endif;
	?>
</div>
