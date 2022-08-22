<?php
namespace Codexpert\Image_Sizes;

// set flag
if( isset( $_GET['page'] ) && $_GET['page'] == 'image-sizes' ) {
	update_option( 'image-sizes_setup_done', 1 );
}

$image_sizes 	= $args['image_sizes'] ? : [];
$selected_sizes = Helper::get_option( 'prevent_image_sizes', 'disables', [] );
$image_sizes 			= $args['image_sizes'] ? : [];
$selected_sizes 		= Helper::get_option( 'prevent_image_sizes', 'disables', [] );
$image_sizes_disables 	= Helper::get_option( 'prevent_image_sizes', 'disables', [] );
$disables_count 		= count( $image_sizes_disables );
$enables_count 			= count( $image_sizes ) - $disables_count;
?>

<div class="image_sizes-thumbnails-panel">
	<div class="image_sizes-default-thumbnails-panel">
		<div class="image_sizes-default-thumbnails-panel-top">
			<div class="image_sizes-desc-panel">
				<?php
				echo '<p class="image_sizes-desc">' . sprintf( __( 'You currently have <strong>%1$d thumbnails</strong> registered. It means, if you upload an image, it\'ll generate %1$d duplicates along with the original image.', 'image-sizes' ), count( get_option( '_image-sizes', [] ) ) ) . '</p>'; 
				echo '<p class="image_sizes-desc">' . __( 'Drag the image sizes you don\'t want to generate to the right side. The image sizes on the left will be generated.', 'image-sizes' ) . '</p>'; 
				?>
			</div>
			<div class="image_sizes-count">
				<h4>
					<span class="disables-count"><?php esc_html_e( $disables_count ); ?></span><?php _e( 'Thumbnails disabled', 'image-sizes' ); ?>
				</h4>
				<h4>
					<span class="enables-count"><?php esc_html_e( $enables_count ); ?></span><?php _e( 'Thumbnails will be generated', 'image-sizes' ); ?>
				</h4>
			</div>
		</div>

		<div class="image_sizes-default-thumbnails">
			<div class="image_sizes-enable-thumbnails">
				<h4><?php _e( 'Sizes Enabled <small>(will be generated)</small>', 'image-sizes' ); ?></h4>
				<div class="image_sizes-table-heading">
					<ul>
						<li class="image_sizes-heading-name"><?php _e( 'Name', 'image-sizes' ); ?></li>
						<li class="image_sizes-heading-size"><?php _e( 'Size', 'image-sizes' ); ?></li>
						<li class="image_sizes-heading-type"><?php _e( 'Type', 'image-sizes' ); ?></li>
						<li class="image_sizes-heading-cropped"><?php _e( 'Cropped?', 'image-sizes' ); ?></li>
						<li></li>
					</ul>
				</div>
				<ul id="sortable1" class="image_sizes-sortable enable">
					<li class="image_sizes-original-size">
						<span class="image_sizes-thumbnails-name"> <img class="image_sizes-thumbnails-arrow-left" src="'. esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ) .'"><?php _e( 'Original Image', 'image-sizes' ); ?></span> 
						<span class="image_sizes-thumbnails-size"><?php _e( '100%', 'image-sizes' ); ?></span> 
						<span class="image_sizes-thumbnails-type"><?php _e( 'original', 'image-sizes' ); ?></span> 
						<span class="image_sizes-thumbnails-cropped"><?php _e( 'No', 'image-sizes' ); ?></span> 
						<span><img class="image_sizes-thumbnails-arrow-right" src="<?php echo esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ); ?>"></span>
					</li>
					<?php foreach ( $image_sizes as $id => $size ):
						if ( ! in_array( $id, $image_sizes_disables ) ) {
							$_cropped = $size['cropped'] ? __( 'Yes', 'image-sizes' ) : __( 'No', 'image-sizes' );

							echo '<li class="ui-state-default draggable-item">
								<span class="image_sizes-thumbnails-name"> <img class="image_sizes-thumbnails-arrow-left" src="'. esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ) .'">'. esc_html( $id ) .'</span> 
								<span class="image_sizes-thumbnails-size">'. esc_html( $size['width'] ) .'x'. esc_html( $size['height'] ) .' px</span> 
								<span class="image_sizes-thumbnails-type">'. esc_html( $size['type'] ) .'</span> 
								<span class="image_sizes-thumbnails-cropped">'. esc_html( $_cropped ) .'</span> 
								<span><img class="image_sizes-thumbnails-arrow-right" src="'. esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ) .'"></span>
								<input type="hidden" name="" value="'. esc_attr( $id ) .'">
							</li>';
						}
					endforeach; ?>
				</ul>
			</div>

			<div class="image_sizes-disable-thumbnails">
				<h4><?php _e( 'Sizes Disabled <small>(will not be generated)</small>', 'image-sizes' ); ?></h4>
				<div class="image_sizes-table-heading">
					<ul>
						<li class="image_sizes-heading-name"><?php _e( 'Name', 'image-sizes' ); ?></li>
						<li class="image_sizes-heading-size"><?php _e( 'Size', 'image-sizes' ); ?></li>
						<li class="image_sizes-heading-type"><?php _e( 'Type', 'image-sizes' ); ?></li>
						<li class="image_sizes-heading-cropped"><?php _e( 'Cropped?', 'image-sizes' ); ?></li>
						<li></li>
					</ul>
				</div>
				<ul id="sortable2" class="image_sizes-sortable disable">
					<?php foreach ( $image_sizes_disables as $id ):
						$size = $image_sizes[ $id ];
						$_cropped = $size['cropped'] ? __( 'Yes', 'image-sizes' ) : __( 'No', 'image-sizes' );

						echo '<li class="ui-state-highlight sortable-item">
								<span class="image_sizes-thumbnails-name"> <img class="image_sizes-thumbnails-arrow-left" src="'. esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ) .'">'. esc_html( $id ) .'</span> 
								<span class="image_sizes-thumbnails-size">'. esc_html( $size['width'] ) .'x'. esc_html( $size['height'] ) .' px</span> 
								<span class="image_sizes-thumbnails-type">'. esc_html( $size['type'] ) .'</span> 
								<span class="image_sizes-thumbnails-cropped">'. esc_html( $_cropped ) .'</span> 
								<span><img class="image_sizes-thumbnails-arrow-right" src="'. esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ) .'"></span>
							<input type="hidden" name="" value="'. esc_attr( $id ) .'">
						</li>';
					endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
	<!-- <div class="image_sizes-custom-thumbnails-panel">
		<label class="image_sizes-switch">
		  	<input type="checkbox" class="checkbox check-this check-default image_sizes-switch-checkbox" name="disables[]" value="thumbnail">
		  <span class="image_sizes-slider round"></span>
		</label>
		<label for=""><?php _e( 'Default Thumbnails', 'image-sizes' ); ?></label>

		<h4>
			<span><?php _e( '1 thumbnails disable', 'image-sizes' ); ?></span>
			<span><?php _e( '4 thumbnails will be generated', 'image-sizes' ); ?></span>
		</h4>

		<div class="image_sizes-default-thumbnails">
			<div class="image_sizes-enable-thumbnails">
				<h4><?php _e( 'Enable', 'image-sizes' ); ?></h4>
				<ul id="sortable1" class="image_sizes-sortable">
					<li class="ui-state-default draggable-item">Item 1 <img src="<?php echo esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ); ?>"></span></li>
					<li class="ui-state-default draggable-item">Item 2 <img src="<?php echo esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ); ?>"></span></li>
					<li class="ui-state-default draggable-item">Item 3 <img src="<?php echo esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ); ?>"></span></li>
					<li class="ui-state-default draggable-item">Item 4 <img src="<?php echo esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ); ?>"></span></li>
					<li class="ui-state-default draggable-item">Item 5 <img src="<?php echo esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ); ?>"></span></li>
				</ul>
			</div>

			<div class="image_sizes-disable-thumbnails">
				<h4><?php _e( 'Disable', 'image-sizes' ); ?></h4>
				<ul id="sortable2" class="image_sizes-sortable disable">
					<li class="ui-state-highlight sortable-item">Item 1 <img src="<?php echo esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ); ?>"></span></li>
					<li class="ui-state-highlight sortable-item">Item 2 <img src="<?php echo esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ); ?>"></span></li>
					<li class="ui-state-highlight sortable-item">Item 3 <img src="<?php echo esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ); ?>"></span></li>
					<li class="ui-state-highlight sortable-item">Item 4 <img src="<?php echo esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ); ?>"></span></li>
					<li class="ui-state-highlight sortable-item">Item 5 <img src="<?php echo esc_url( plugins_url( 'assets/img/arrow.png', IMAGE_SIZES ) ); ?>"></span></li>
				</ul>
			</div>
		</div>
	</div> -->
</div>