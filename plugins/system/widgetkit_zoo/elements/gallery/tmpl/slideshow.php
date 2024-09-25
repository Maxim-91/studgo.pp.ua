<?php
/**
* @package   Widgetkit
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   YOOtheme Proprietary Use License (http://www.yootheme.com/license)
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

$css_classes  = ($params->get('corners', 'square') == 'round') ? 'round ' : '';
$css_classes .= ($params->get('effect') == 'zoom') ? 'zoom ' : '';
$css_classes .= ($params->get('margin')) ? 'margin ' : '';

$settings = array();
foreach ((array) $params as $key => $value) {
	if (strpos($key, "slideshow_") === 0) {
		$settings[str_replace('slideshow_', '', $key)] = is_numeric($value) ? (float) $value : $value;
	}
}

$id = $this->identifier.'-'.uniqid();

?>

<div class="zoo-gallery" id="<?php echo $id; ?>" data-widgetkit="slideshow" data-options='<?php echo json_encode($settings); ?>'>

	<ul class="slides">

	<?php foreach ($thumbs as $image) : ?>
		<li>
			<img src="<?php echo $image['img']; ?>" alt="<?php echo $image['filename']; ?>" />
		</li>
	<?php endforeach; ?>

	</ul>

	<div class="zoo-gallery-wall clearfix nav <?php echo $css_classes; ?>">
		<?php foreach ($thumbs as $image) : ?>

			<?php

				$spotlight = '';
				$overlay   = '';

				/* Prepare Spotlight */
				if ($params->get('effect') == 'spotlight') {
					if ($params->get('spotlight_effect') && $params->get('spotlight_caption')) {
						$spotlight = 'data-spotlight="effect:'.$params->get('spotlight_effect').'"';
						$overlay = '<div class="overlay">'.$image['name'].'</div>';
					} else {
						$spotlight = 'data-spotlight="on"';
					}
				}

				/* Prepare Image */
				$content = '<img src="'.$image['thumb'].'" width="'.$image['thumb_width'].'" height="'.$image['thumb_height'].'" alt="'.$image['filename'].'" />'.$overlay;

			?>

			<span class="thumb" <?php echo $spotlight; ?>><?php echo $content; ?></span>

		<?php endforeach; ?>

	</div>

</div>

<?php
	if ($params->get('effect') == 'opacity') {
		$this->app->document->addScriptDeclaration(sprintf("jQuery(function($) { $('%s').opacity(); });", '#'.$id .' .thumb'));
	}
 ?>

<script type="text/javascript">
	jQuery(function($) {
		if ($['widgetkit']) {
			var slides = $("#<?php echo $id; ?>");
			slides.delegate('.thumb', 'click', function () {
				if(slides.data('slideshow'))
					slides.slideshow('show', $(this).index());
			});
		}
	});
</script>
