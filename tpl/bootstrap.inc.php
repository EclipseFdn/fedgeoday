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
if (!defined('ABSPATH')) exit;

/**
 * Helper function for parsing XML files.
 */
function _loadxml($path = NULL) {
  if (!is_readable($path)) {
    return FALSE;
  }
  return simplexml_load_file($path, 'SimpleXMLElement', LIBXML_NOCDATA);
}

/**
 * Load configurations.
 */
$config = json_decode(json_encode(_loadxml('xml/event.xml')), TRUE);

/**
 * Load sponsors.
 */
$xml_sponsors = _loadxml('xml/sponsors.xml');
$sponsors = array();
foreach ($xml_sponsors as $sp) {
  $sponsors[] = array(
    'src' => $sp->src,
    'title' => $sp->title,
    'url' => $sp->url,
  );
}
shuffle($sponsors);

/**
 * Load sponsorship information.
 */
$xml_sponsorship = _loadxml('xml/sponsorship.xml');
$sponsorship = array();
foreach ($xml_sponsorship as $sp) {
  $sponsorship[] = array(
    'price' => $sp->price,
    'price_text' => $sp->price_text,
    'title' => $sp->title,
    'body' => $sp->body,
  );
}

/**
 * Load schedule.
 */
$xml_schedule = _loadxml('xml/schedule.xml');
$xml_rooms = _loadxml('xml/rooms.xml');

$rooms = array();
foreach ($xml_rooms as $room){
  $id = (int)$room->room_id;
  $rooms[$id] = array(
    'room_id' => $room->room_id,
    'color' => $room->color,
    'title' => $room->title,
  );
}

$sessions = array();
foreach ($xml_schedule as $session) {
  $id = (int)$session->room_id;
  $room_data = array(
    'room_id' => $session->room_id,
    'title' => $session->room_id,
    'color' => '#777',
  );

  if (isset($rooms[$id])) {
    $room_data = $rooms[$id];
  }

  $sessions[] = array(
    'time' => $session->time,
    'room_id' => $session->room_id,
    'title'  => $session->title,
    'teaser' => $session->teaser,
    'body' => $session->body,
    'room_data' => $room_data
  );
}

/**
 * Load template files.
 */
require_once '../tpl/head.tpl.php';
require_once '../tpl/body.tpl.php';
require_once '../tpl/footer.tpl.php';