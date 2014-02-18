<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Your Name or Company Name
 */
?>

<div class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<p>The following settings control the positioning and offsets of headline elements within your posts.</p>

	<label for="adh_offset_px">Total offset (px) of fixed navigation</label>
	<input type="text" name="adh_offset_px" id="adh_offset_px" placeholder="100"> px

	<!-- @TODO: Provide markup for your options page here. -->

</div>
