<?php

if ( !defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php $children = mphb_tmpl_get_room_type_children_capacity(); ?>

<?php if ( !empty( $children ) ) : ?>

	<?php

	/**
	 * @hooked \MPHB\Views\LoopRoomTypeView::_renderChildrenListItemOpen				- 10
	 * @hooked \MPHB\Views\LoopRoomTypeView::_renderChildrenTitle						- 20
	 * @hooked \MPHB\Views\LoopRoomTypeView::_renderAttributesListItemValueHolderOpen	- 30
	 */
	do_action( 'mphb_render_loop_room_type_before_children' );
	?>

	<?php echo $children; ?>

	<?php

	/**
	 * @hooked \MPHB\Views\LoopRoomTypeView::_renderAttributesListItemValueHolderClose	- 10
	 * @hooked \MPHB\Views\LoopRoomTypeView::_renderAdultsListItemClose					- 20
	 */
	do_action( 'mphb_render_loop_room_type_after_children' );
	?>

<?php endif; ?>