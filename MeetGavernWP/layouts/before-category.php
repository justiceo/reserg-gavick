<?php 
	
	/**
	 *
	 * Template elements before the page content
	 *
	 **/
	
	// create an access to the template main object
	global $tpl;
	
	// disable direct access to the file	
	defined('GAVERN_WP') or die('Access denied');
	
?>

<?php if(gk_is_active_sidebar('header')) : ?>
	<div id="gk-header">
		<div class="gk-page">
			<?php gk_dynamic_sidebar('header'); ?>
		</div>
	</div>
<?php endif; ?>

<?php if(gk_is_active_sidebar('banner-cat')) : ?>
<div id="gk-top" class="make-background">
	<div class="gk-page widget-area">
		<?php gk_dynamic_sidebar('banner-cat'); ?>
	</div>
</div>
<?php endif; ?>


<div class="gk-page-wrap banner-space">
	<div class="gk-page">
		<div id="gk-mainbody-columns" <?php if(get_option($tpl->name . '_page_layout', 'right') == 'left') : ?> class="gk-column-left"<?php endif; ?>>
			<section>
				<?php if(gk_is_active_sidebar('mainbody_top')) : ?>
				<div id="gk-mainbody-top">
					<?php gk_dynamic_sidebar('mainbody_top'); ?>
                    <h1 class="page-title">
			            <?php
				            printf( __( ' %s', GKTPLNAME ), '<span>' . single_cat_title( '', false ) . '</span>' );
			            ?>
		            </h1>
	
		            <?php
			            $category_description = category_description();
			            if ( ! empty( $category_description ) )
				            echo apply_filters( 'category_archive_meta', '<section class="intro">' . $category_description . '</section>' );
		            ?>

				</div>
				<?php endif; ?>
				
				<!-- Mainbody, breadcrumbs -->
				<?php if(gk_show_breadcrumbs()) : ?>
				<div id="gk-breadcrumb-area">
					<?php gk_breadcrumbs_output(); ?>
				</div>
				<?php endif; ?>