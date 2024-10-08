<?php
/**
* @package   yoo_downtown
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   YOOtheme Proprietary Use License (http://www.yootheme.com/license)
*/

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
$params = &$this->params;

?>

<div class="items">

	<?php foreach ($this->items as $i => $item) : ?>
	<article class="item">

		<header>
			
			<h1 class="title">
				<?php if ($params->get('show_create_date')) : ?>
				<time datetime="<?php echo substr($item->created, 0,10); ?>" pubdate>
					<span class="month"><?php echo JHTML::_('date',$item->created, JText::_('M')); ?></span>
					<span class="day"><?php echo JHTML::_('date',$item->created, JText::_('d')); ?></span>
				</time>
				<?php endif; ?>
		
				<?php if ($params->get('link_titles')): ?>
					<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($item->slug,$item->catslug)); ?>" title="<?php echo $this->escape($item->title); ?>"><?php echo $this->escape($item->title); ?></a>
				<?php else : ?>
					<?php echo $this->escape($item->title); ?>
				<?php endif; ?>
			</h1>
	
			<?php if (($params->get('show_author') && !empty($this->item->author)) || $params->get('show_category')) : ?>
			<p class="meta">
		
				<?php
					
					if ($params->get('show_author') && !empty($item->author )) {
						
						$author = $item->author;
						$author = ($item->created_by_alias ? $item->created_by_alias : $author);
						
						if (!empty($item->contactid ) &&  $params->get('link_author') == true) {
							echo JText::sprintf('COM_CONTENT_WRITTEN_BY', JHtml::_('link',JRoute::_('index.php?option=com_contact&view=contact&id='.$item->contactid),$author));
						} else {
							echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $author);
						}
						echo '. ';
		
					}

					if ($params->get('show_category')) {
						echo JText::_('TPL_WARP_POSTED_IN').' ';
						$title = $this->escape($item->category_title);
						$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($item->catslug)).'">'.$title.'</a>';
						if ($params->get('link_category')) {
							echo $url;
						} else {
							echo $title;
						}
					}
		
				?>	
			
			</p>
			<?php endif; ?>

		</header>

		<?php if ($params->get('show_intro')) :?>
		<div class="content clearfix"><?php echo JHtml::_('string.truncate', $item->introtext, $params->get('introtext_limit')); ?></div>		
		<?php endif; ?>

	</article>
	<?php endforeach; ?>

</div>

<?php echo $this->pagination->getPagesLinks(); ?>
