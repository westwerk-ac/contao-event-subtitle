<?php

/**	
 * 
 * Copyright (C) 2013 Thomas Belkowski / WESTWERK GmbH & Co. KG
 * 
 * @package event_subtitle
 * @author  Thomas Belkowski / WESTWERK GmbH & Co. KG
 * @license LGPL
 */
 
 //BackEnd
 $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default'] = str_replace('title','title,subtitle', $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default']);
 
 $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['title']['eval']['tl_class'] = 'w50';
 
 $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['subtitle'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_calendar_events']['subtitle'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'               => "varchar(255) NOT NULL default ''"
);