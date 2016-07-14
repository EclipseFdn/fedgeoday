<?php
/*******************************************************************************
 * Copyright (c) 2016 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Andrea Ross(Eclipse Foundation) - Initial implementation
 *******************************************************************************/

/** 
 * Define ABSPATH as this files directory 
 */
define('ABSPATH', dirname(__FILE__) . '/2016/');

require_once '../tpl/head.tpl.php';
require_once '../tpl/top.tpl.php';
?>


<h1>Call For Proposals</h1>

<h2>Format</h2>

<p>The conference consists of one day of sessions across 3 session rooms. Standard talks are 25 minutes long. Short talks are 15 minutes long. Lightning talks are 5 minutes long.</p>

<h2>Conference Topics</h2>

<p>Below is a list of topics that we think attendees would be excited to hear about for session presentations. The list is certainly not exhaustive and other interesting topics will be considered under the "Other Cool Stuff" category. In general, use cases will be preferred over pure technology talks. Emerging technology &amp; technique talks are very welcome.</p>

<p>This conference heavily emphasizes open, however noteworthy talks on hybrid solutions using both open &amp; proprietary will be considered.</p>

<h3>Open Source and Open Data policy and practice</h3>

<p>Licenses, privacy, ethics, practicalities of open source/ open standards/ and open data use in government, success/failure stories, funding (seeking/offering), getting support, and migrating from legacy systems.</p>

<h3>Processing data at scale</h3>

<p>Remote sensing, feature extraction, machine learning, distributed computing (AWS, C2S/GovCloud).</p>

<h3>Data Capture</h3>

<p>Drones, kites, balloons, satellites, sensors, and other data capture channels.</p>

<h3>Data visualization</h3>

<p>Web mapping, 3D, Mobile, animating data changes</p>

<h3>Citizen Science Enablement</h3>

<p>Crowdsourcing and public participation, open collaboration, DIY, and related.</p>

<h3>Other cool stuff</h3>

<p>Anything you think is very interesting and worth talking about.</p>


<a href="http://goo.gl/forms/UDpxUvyqmYBiv60r2" class="btn btn-secondary">Submit a Proposal NOW!</a>


<?
require_once '../tpl/footer.tpl.php';
?>
