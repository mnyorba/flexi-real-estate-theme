<?php
$fields = get_field_objects( $post->ID );
?>
<div>
	<i class="fa fa-map-signs" aria-hidden="true"></i>
	<a href="<?php echo esc_url( $fields['location_coordinates']['value'] ); ?>" target="_blank" rel="noopener noreferrer">
		<?php echo esc_html( $fields['house_name']['value'] ); ?>
	</a>
</div>
<div>
	<i class="fa fa-building-o" aria-hidden="true"></i>
	<?php echo esc_html( $fields['number_of_floors']['label'] .': '. $fields['number_of_floors']['value'] ); ?>
</div>
<div>
	<i class="fa fa-square" aria-hidden="true"></i>
	<?php echo esc_html( $fields['building_type']['label'] .': '. $fields['building_type']['choices'][$fields['building_type']['value']] ); ?>
</div>
<div>
	<i class="fa fa-leaf" aria-hidden="true"></i>
	<?php echo esc_html( $fields['environmental_friendliness']['label'] .': '. $fields['environmental_friendliness']['value'] ); ?>
</div>
<?php if( is_archive() ): ?>
	<div>
		<i class="fa fa-object-ungroup" aria-hidden="true"></i>
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<?php echo esc_html( $fields['apartments']['label'] .': '. count( $fields['apartments']['value'] ) ); ?>
		</a>
	</div>
<?php endif; ?>
