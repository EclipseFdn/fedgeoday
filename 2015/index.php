<?php
/*******************************************************************************
 * Copyright (c) 2015 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Christopher Guindon (Eclipse Foundation) - Initial implementation
 *******************************************************************************/

/**
 * Helper function for parsing XML files.
 */
function _loadxml($path = NULL) {
  if (!is_readable($path)) {
    return FALSE;
  }
  $xml = simplexml_load_file($path, 'SimpleXMLElement', LIBXML_NOCDATA);
  return json_decode(json_encode($xml), TRUE);
}

/** 
 * Define ABSPATH as this files directory 
 */
define('ABSPATH', dirname(__FILE__) . '/');

/**
 * Load configurations.
 */
$config = _loadxml('xml/event.xml');

/**
 * Load sponsors.
 */
$sponsors = _loadxml('xml/sponsors.xml');
shuffle($sponsors);

/**
 * Load schedule.
 */
$xml_schedule = _loadxml('xml/schedule.xml');
$xml_rooms = _loadxml('xml/rooms.xml');

$rooms = array();
foreach ($xml_rooms['room'] as $room){
  $id = $room['room_id'];
  $rooms[$id] = $room;
}

$sessions = array();
foreach ($xml_schedule['session'] as $session){
  $room_data = array(
    'room_id' => $session['room_id'],
    'title' => $session['room_id'],
    'color' => '#777',
  );
  if (isset($rooms[$session['room_id']])) {
    $room_data = $rooms[$session['room_id']];
  }
  $session['room_data'] = $room_data;
  $sessions[] = $session;
}

/**
 * Load template files.
 */
require_once 'tpl/head.tpl.php';
require_once 'tpl/body.tpl.php';
require_once 'tpl/footer.tpl.php';
