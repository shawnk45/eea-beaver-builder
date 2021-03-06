/**
 * $module An instance of your module class.
 * $id The module's ID.
 * $settings The module's settings.
*/
<?php
$headerfamily = $settings->header_font;
$rowfamily = $settings->row_font;
$linkfamily = $settings->link_font_family;
$overlay_font_family = $settings->overlay_font_family;
?>
.fl-node-<?php echo $id; ?> .ee-eventgrid-content {
	max-width: 100%;
}

.fl-node-<?php echo $id; ?> .fl-node-content {
	background-color: <?php echo $settings->container_bg_color ? espresso_hex2rgba('#' . $settings->container_bg_color, $settings->container_background_opacity) : 'transparent'; ?>;
    <?php if( $settings->container_border_width >= 0 ) { ?>
    border-width: <?php echo $settings->container_border_width; ?>px;
    <?php } ?>
    <?php if( $settings->container_border_color ) { ?>
    border-color: #<?php echo $settings->container_border_color; ?>;
    <?php } ?>
    <?php if( $settings->container_border_style ) { ?>
    border-style: <?php echo $settings->container_border_style; ?>;
    <?php } ?>
    <?php if( $settings->container_border_radius >= 0 ) { ?>
    border-radius: <?php echo $settings->container_border_radius; ?>px;
    <?php } ?>
    <?php if( $settings->container_padding >= 0 ) { ?>
	padding: <?php echo $settings->container_padding; ?>px;
	<?php } ?>
	
}

<?php if( !empty($settings->grid_title) ) { ?>
    .fl-node-<?php echo $id; ?> .events-grid-title {
        <?php if( $settings->title_color ) { ?>
        color: #<?php echo $settings->title_color; ?>;
        <?php } ?>
        display: block;
        <?php if( $settings->title_font_size ) { ?>
        font-size: <?php echo $settings->title_font_size; ?>px;
        <?php } ?>
        <?php if( $settings->title_font_family['family'] != 'Default' ) { ?>
        <?php FLBuilderFonts::font_css( $settings->title_font_family ); ?>
        <?php } ?>
        <?php if( $settings->title_alignment ) { ?>
        text-align: <?php echo $settings->title_alignment; ?>;
        <?php } ?>
    }
<?php }

if( !empty($settings->grid_description) ) { ?>
    .fl-node-<?php echo $id; ?> .events-grid-description {
        <?php if( $settings->description_font_family['family'] != 'Default' ) { ?>
        <?php FLBuilderFonts::font_css( $settings->description_font_family ); ?>
        <?php } ?>
        <?php if( $settings->description_color ) { ?>
        color: #<?php echo $settings->description_color; ?>;
        <?php } ?>
    	display: <?php echo ($settings->description_field == 'false') ? 'none' : 'block'; ?>;
        <?php if( $settings->description_font_size ) { ?>
        font-size: <?php echo $settings->description_font_size; ?>px;
        <?php } ?>
        <?php if( $settings->description_alignment ) { ?>
        text-align: <?php echo $settings->description_alignment; ?>;
        <?php } ?>
    }
<?php }?>

.fl-node-<?php echo $id; ?> .espresso-events-grid .register-link {
    <?php if($settings->link_font_size != 'default') { ?>
        font-size: <?php echo $settings->link_font_size; ?>px;
    <?php } ?>
    <?php if( $linkfamily['family'] != 'Default' ) { ?><?php FLBuilderFonts::font_css( $linkfamily ); ?><?php } ?>
    color: #<?php echo $settings->link_text_color; ?>;
}

.fl-node-<?php echo $id; ?> .ee_overlay {
    <?php if($settings->overlay_font_size != 'default') { ?>
        font-size: <?php echo $settings->overlay_font_size; ?>px;
    <?php } ?>
    <?php if( $overlay_font_family['family'] != 'Default' ) { ?><?php FLBuilderFonts::font_css( $overlay_font_family ); ?><?php } ?>
    color: #<?php echo $settings->overlay_text_color; ?>;
    background-color: <?php echo $settings->overlay_background_color ? espresso_hex2rgba('#' . $settings->overlay_background_color, $settings->overlay_background_opacity) : 'transparent'; ?>;
}