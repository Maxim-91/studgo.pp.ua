<?php
/**
* @package   Widgetkit
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   YOOtheme Proprietary Use License (http://www.yootheme.com/license)
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

$media_position = $params->get('media_position', 'top');

?>

<div class="layout-article clearfix">

	<?php if (($media_position == 'top' || $media_position == 'left' || $media_position == 'right') && $this->checkPosition('media')) : ?>
	<div class="media media-<?php echo $media_position; ?>">
		<?php echo $this->renderPosition('media'); ?>
	</div>
	<?php endif; ?>
	
	<?php if ($this->checkPosition('title')) : ?>
	<h3 class="title">
		<?php echo $this->renderPosition('title'); ?>
	</h3>
	<?php endif; ?>
	
	<?php if ($this->checkPosition('meta')) : ?>
	<p class="meta">
		<?php echo $this->renderPosition('meta', array('style' => 'comma')); ?>
	</p>
	<?php endif; ?>
	
	<?php if (($media_position == 'middle') && $this->checkPosition('media')) : ?>
	<div class="media media-<?php echo $media_position; ?>">
		<?php echo $this->renderPosition('media'); ?>
	</div>
	<?php endif; ?>
	
	<?php if ($this->checkPosition('description')) : ?>
	<div class="description">
		<?php echo $this->renderPosition('description', array('style' => 'block')); ?>
	</div>
	<?php endif; ?>
	
	<?php if (($media_position == 'bottom') && $this->checkPosition('media')) : ?>
	<div class="media media-<?php echo $media_position; ?>">
		<?php echo $this->renderPosition('media'); ?>
	</div>
	<?php endif; ?>
	
	<?php if ($this->checkPosition('links')) : ?>
	<p class="links">
		<?php echo $this->renderPosition('links', array('style' => 'pipe')); ?>
	</p>
	<?php endif; ?>
	
</div>
