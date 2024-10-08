<?php
/**
* @package   Widgetkit
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   YOOtheme Proprietary Use License (http://www.yootheme.com/license)
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<div id="<?php echo $this->identifier; ?>">

	<div class="row">
		<input type="text" readonly="readonly" name="<?php echo $this->getControlName('value'); ?>" value="<?php echo $this->get('value'); ?>" placeholder="<?php echo JText::_('Path'); ?>"/>
	</div>

    <div class="row">
        <?php echo $this->app->html->_('control.text', $this->getControlName('title'), $title, 'maxlength="255" title="'.JText::_('Thumbnail Title').'" placeholder="'.JText::_('Thumbnail Title').'"'); ?>
    </div>

</div>

<script type="text/javascript">
	jQuery(function($) {
		$('#<?php echo $this->identifier; ?> input[name="<?php echo $this->getControlName('value'); ?>"]').Directories({
			url: '<?php echo $this->app->link(array('task' => 'callelement', 'format' => 'raw', 'type' => $this->_item->getType()->id, 'item_id' => $this->_item->id, 'elm_id' => $this->identifier, 'method' => 'dirs'), false); ?>',
			title: '<?php echo JText::_('Folders'); ?>',
			msgDelete: '<?php echo JText::_('Delete'); ?>'
		});
	});
</script>
