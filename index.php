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
 * Composer autoload file.
 */
 require 'vendor/autoload.php';
 
 
/** 
 * Define ABSPATH as this files directory 
 */
define( 'ABSPATH', dirname(__FILE__) . '/' );

/** 
 * Load libraries.
 */
use XmlIterator\XmlIterator;

/**
 * Load configurations.
 */
$it_event = new XmlIterator("xml/event.xml", "event");
foreach ($it_event as $c){
  $config = $c;
}

/**
 * Load sponsors.
 */
$it_sponsors = new XmlIterator("xml/sponsors.xml", "sponsor");
$sponsors = array();
foreach ($it_sponsors as $sponsor){
  $sponsors[] = $sponsor;
}
shuffle($sponsors);

/**
 * Load schedule.
 */
$it_schedule = new XmlIterator("xml/schedule.xml", "session");
$it_rooms = new XmlIterator("xml/rooms.xml", "room");

$rooms = array();
foreach ($it_rooms as $room){
  $id = $room['room_id'];
  $rooms[$id] = $room;
}

$sessions = array();
foreach ($it_schedule as $session){
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
