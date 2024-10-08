<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   YOOtheme Proprietary Use License (http://www.yootheme.com/license)
*/

// no direct access
defined('_JEXEC') or die;

JHtml::core();

$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));

?>

<?php if (empty($this->items)) : ?>
	<p><?php echo JText::_('COM_CONTACT_NO_ARTICLES'); ?></p>
<?php else : ?>

<form action="<?php echo htmlspecialchars(JFactory::getURI()->toString()); ?>" method="post" name="adminForm" id="adminForm">

	<?php if ($this->params->get('show_pagination_limit')) : ?>
	<div class="filter">
		<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>
		<?php echo $this->pagination->getLimitBox(); ?>
	</div>
	<?php endif; ?>

	<table class="zebra">
		<?php if ($this->params->get('show_headings')) : ?>
		<thead>
			<tr>

				<th class="item-title">
					<?php echo JHtml::_('grid.sort', 'COM_CONTACT_CONTACT_EMAIL_NAME_LABEL', 'a.name', $listDirn, $listOrder); ?>
				</th>
				
				<?php if ($this->params->get('show_position_headings')) : ?>
				<th class="item-position">
					<?php echo JHtml::_('grid.sort', 'COM_CONTACT_POSITION', 'a.con_position', $listDirn, $listOrder); ?>
				</th>
				<?php endif; ?>
				
				<?php if ($this->params->get('show_email_headings')) : ?>
				<th class="item-email">
					<?php echo JText::_('JGLOBAL_EMAIL'); ?>
				</th>
				<?php endif; ?>
				
				<?php if ($this->params->get('show_telephone_headings')) : ?>
				<th class="item-phone">
					<?php echo JText::_('COM_CONTACT_TELEPHONE'); ?>
				</th>
				<?php endif; ?>
	
				<?php if ($this->params->get('show_mobile_headings')) : ?>
				<th class="item-phone">
					<?php echo JText::_('COM_CONTACT_MOBILE'); ?>
				</th>
				<?php endif; ?>
	
				<?php if ($this->params->get('show_fax_headings')) : ?>
				<th class="item-phone">
					<?php echo JText::_('COM_CONTACT_FAX'); ?>
				</th>
				<?php endif; ?>
	
				<?php if ($this->params->get('show_suburb_headings')) : ?>
				<th class="item-suburb">
					<?php echo JHtml::_('grid.sort', 'COM_CONTACT_SUBURB', 'a.suburb', $listDirn, $listOrder); ?>
				</th>
				<?php endif; ?>
	
				<?php if ($this->params->get('show_state_headings')) : ?>
				<th class="item-state">
					<?php echo JHtml::_('grid.sort', 'COM_CONTACT_STATE', 'a.state', $listDirn, $listOrder); ?>
				</th>
				<?php endif; ?>
	
				<?php if ($this->params->get('show_country_headings')) : ?>
				<th class="item-state">
					<?php echo JHtml::_('grid.sort', 'COM_CONTACT_COUNTRY', 'a.country', $listDirn, $listOrder); ?>
				</th>
				<?php endif; ?>

			</tr>
		</thead>
		<?php endif; ?>

		<tbody>
			<?php foreach($this->items as $i => $item) : ?>
				<tr class="<?php if ($i % 2 == 1) { echo 'even'; } else { echo 'odd'; } ?>">

					<td class="item-title">
						<a href="<?php echo JRoute::_(ContactHelperRoute::getContactRoute($item->slug, $item->catid)); ?>"><?php echo $item->name; ?></a>
					</td>

					<?php if ($this->params->get('show_position_headings')) : ?>
						<td class="item-position">
							<?php echo $item->con_position; ?>
						</td>
					<?php endif; ?>

					<?php if ($this->params->get('show_email_headings')) : ?>
						<td class="item-email">
							<?php echo $item->email_to; ?>
						</td>
					<?php endif; ?>

					<?php if ($this->params->get('show_telephone_headings')) : ?>
						<td class="item-phone">
							<?php echo $item->telephone; ?>
						</td>
					<?php endif; ?>

					<?php if ($this->params->get('show_mobile_headings')) : ?>
						<td class="item-phone">
							<?php echo $item->mobile; ?>
						</td>
					<?php endif; ?>

					<?php if ($this->params->get('show_fax_headings')) : ?>
					<td class="item-phone">
						<?php echo $item->fax; ?>
					</td>
					<?php endif; ?>

					<?php if ($this->params->get('show_suburb_headings')) : ?>
					<td class="item-suburb">
						<?php echo $item->suburb; ?>
					</td>
					<?php endif; ?>

					<?php if ($this->params->get('show_state_headings')) : ?>
					<td class="item-state">
						<?php echo $item->state; ?>
					</td>
					<?php endif; ?>

					<?php if ($this->params->get('show_country_headings')) : ?>
					<td class="item-state">
						<?php echo $item->country; ?>
					</td>
					<?php endif; ?>

				</tr>
			<?php endforeach; ?>

		</tbody>
	</table>

	<?php if ($this->params->get('show_pagination')) : ?>
	<?php echo $this->pagination->getPagesLinks(); ?>
	<?php endif; ?>
	
	<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
</form>
<?php endif; ?>
