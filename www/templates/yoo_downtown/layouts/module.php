<?php
/**
* @package   yoo_downtown
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   YOOtheme Proprietary Use License (http://www.yootheme.com/license)
*/

// init vars
$id				= $module->id;
$position		= $module->position;
$title			= $module->title;
$showtitle		= $module->showtitle;
$content		= $module->content;
$split_color	= '';
$subtitle		= '';
$title_template	= '';
$header			= '';

// init params
foreach (array('suffix', 'style', 'color', 'header', 'badge', 'icon', 'dropdownwidth') as $var) {
	$$var = isset($params[$var]) ? $params[$var] : null;
}

if (strpos($style,";")!==false) {
	parse_str(str_replace(";","&",$style));
}

// set default module types
if ($style == '') {
	if ($module->position == 'top-a') $style = 'box';
	if ($module->position == 'top-b') $style = 'box';
	if ($module->position == 'bottom-a') $style = 'box';
	if ($module->position == 'bottom-b') $style = 'line';
	if ($module->position == 'innertop') $style = 'box';
	if ($module->position == 'innerbottom') $style = 'box';
	if ($module->position == 'sidebar-a') $style = 'box';
	if ($module->position == 'sidebar-b') $style = 'box';
}

// test module styles here
//$style = '';
//$color = '';
//$header = '';
//$badge = '';
//$icon = '';
//$title = '';

// force module style
if (in_array($module->position, array('absolute', 'breadcrumbs', 'logo', 'banner', 'search', 'debug'))) {
	$style = 'raw';
	$showtitle = 0;
}
if (in_array($module->position, array('headerbar', 'toolbar-r' ,'toolbar-l', 'footer'))) {
	$style = '';
	$showtitle = 0;
}
if ($module->position == 'menu') {
	$style = $module->menu ? 'raw' : 'dropdown';
}

// set module template using the style
switch ($style) {

	case 'box':
		$template		= 'default-1';
		$style			= 'mod-'.$style;
		$style			.= ($color) ? ' mod-box-'.$color : '';
		$style			.= ($header) ? ' mod-box-header mod-box-header-'.$header : '';
		$split_color	= 0;
		$subtitle		= 1;
		$title_template = '<h3 class="module-title">%s</h3>';
		$content		= ($header) ? '<div>'.$content.'</div>' : $content;
		break;
		
	case 'line':
		$template		= 'default-1';
		$style			= 'mod-'.$style;
		$subtitle		= 1;
		$title_template = '<h3 class="module-title">%s</h3>';
		$badge          = '';
		break;

	case 'dropdown':
		$template		= 'dropdown';
		$subtitle		= 1;
		break;

	case 'raw':
		$template		= 'raw';
		break;

	default:
		$template		= 'default-1';
		$style			= $suffix;
		$title_template = '<h3 class="module-title">%s</h3>';
		$badge          = '';
}

$style.=" ".$suffix;

// set badge if exists
if ($badge) {
	$badge = '<div class="badge badge-'.$badge.'"></div>';
}

// split title in two colors
if ($split_color) {
	$pos = mb_strpos($title, ' ');
	if ($pos !== false) {
		$title = '<span class="color">'.mb_substr($title, 0, $pos).'</span>'.mb_substr($title, $pos);
	}
}

// create subtitle
if ($subtitle) {
	$pos = mb_strpos($title, '||');
	if ($pos !== false) {
		$title = '<span class="title">'.mb_substr($title, 0, $pos).'</span><span class="subtitle">'.mb_substr($title, $pos + 2).'</span>';
	}
}

// create title icon if exists
if ($icon) {
	$title = '<span class="icon icon-'.$icon.'"></span>'.$title.'';
}

// create title template
if ($title_template) {
	$title = sprintf($title_template, $title);
}

// set dropdownwidth if exists
if ($dropdownwidth) {
	$dropdownwidth = 'style="width: '.$dropdownwidth.'px;"';
}

// render menu
if ($module->menu) {

	// set menu renderer
	if (isset($params['menu'])) {
		$renderer = $params['menu'];
	} else if (in_array($module->position, array('menu'))) {
		$renderer = 'dropdown';
	} else if (in_array($module->position, array('toolbar-l', 'toolbar-r', 'footer'))) {
		$renderer = 'default';
	} else {
		$renderer = 'accordion';
	}

	// set menu style
	if ($renderer == 'dropdown') {
		$module->menu_style = 'menu-dropdown';
	} else if ($renderer == 'accordion') {
		$module->menu_style = 'menu-sidebar';
	} else if ($renderer == 'default') {
		$module->menu_style = 'menu-line';
	} else {
		$module->menu_style = null;
	}

	$content = $this['menu']->process($module, array_unique(array('pre', 'default', $renderer, 'post')));
}

// render module
echo $this->render("modules/templates/{$template}", compact('style', 'badge', 'showtitle', 'title', 'content', 'dropdownwidth'));

