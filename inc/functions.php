<?php
/**
 * Filter the main query posts to order by environmental friendliness.
 *
 * This action hook is used to modify the main WP_Query object to order the
 * posts by the 'environmental_friendliness' meta key in descending order.
 * The order_by_real_estate() method is a custom method that takes the
 * WP_Query instance and the meta key, orderby, and order parameters as
 * arguments to modify the query object.
 *
 * @param \WP_Query $query The WP_Query instance (passed by reference).
 */
add_action(
	'pre_get_posts',
	function (WP_Query $query): void {
		/**
		 * Order the posts by environmental friendliness in descending order.
		 *
		 * The order_by_real_estate() method is a custom method that takes the
		 * WP_Query instance and the meta key, orderby, and order parameters as
		 * arguments. The method modifies the query object to order the posts by
		 * the specified meta key and order.
		 *
		 * @link https://developer.wordpress.org/reference/classes/wp_query/
		 */
		Real_Estate_Post_Type::get_instance()->order_by_real_estate(
			$query,
			order: 'ASC'
		);
	}
);
