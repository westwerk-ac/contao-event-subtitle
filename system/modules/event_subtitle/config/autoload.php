<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Events_subtitle
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'event_full_sub'     => 'system/modules/events_subtitle/templates',
	'event_list_sub'     => 'system/modules/events_subtitle/templates',
	'event_teaser_sub'   => 'system/modules/events_subtitle/templates',
	'event_upcoming_sub' => 'system/modules/events_subtitle/templates',
));
